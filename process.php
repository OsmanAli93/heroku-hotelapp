<?php
    session_start();
    include_once('class.php');
    include_once('db.php');

    if (isset($_POST['submit-guest'])) {
        
        
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $guest_info = [

            "first_name" => $_POST['first_name'],
            "last_name" => $_POST['last_name'],
            "address_1" => $_POST['addr_one'],
            "address_2" => $_POST['addr_two'],
            "city" => $_POST['city'],
            "state" => $_POST['state'],
            "postal" => $_POST['postal_code'],
            "country" => $_POST['country'],
            "email" => $_POST['email'],
            "contact" => $_POST['contact'],
            "special_request" => $_POST['message'],
            "passport" => $_POST['passport'],
            "nationality" => $_POST['national']
        ];

        
        $book = new Bookings;
        $fetch = new Fetch;
       
        
        $emailExist = $fetch->checkEmail($guest_info['email']);

        // Check if email exists in database
        if ($emailExist > 0) {

            header('Location: process.php?emailtaken=' . $guest_info['email']);
            exit();

        } else {

            $bookings = $book->updateBookingRoom ($_SESSION['room_details'], $guest_info);
            $rooms = $book->updateRooms($_SESSION['room_details']);
            $guest = $book->updateBookingGuest($guest_info);
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($_GET['emailtaken'])) : ?>
            Email Taken
        <?php elseif (isset($_GET['status'])) : ?>
            Success
        <?php elseif (isset($_GET['error'])) : ?>
            Sql Error
        <?php else : ?>
            Process
        <?php endif; ?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="stylesheet" href="icon/css/ionicons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:400,500,700|Roboto:300,400,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="wrapper vh-100 d-flex align-items-center justify-content-center">
            <div class="inner-wrapper text-center bg-white p-5">

                <?php if (isset($_GET['emailtaken'])) : ?>
                    <h1>
                        <i class="ion-android-cancel text-danger"></i>
                        Error
                    </h1>
                    <h1>Email Was Already Taken</h1>
                    <p>We are sorry, look's like email you have entered has been taken</p>
                    <a href="index.php" class="btn btn-primary">Go Back</a>
                <?php elseif (isset($_GET['status'])) : ?>
                    <h1>
                        <i class="ion-checkmark-circled text-success"></i>
                        Success
                    </h1>
                    <h1>You Details has been successfully submitted</h1>
                    <a href="index.php" class="btn btn-primary">Go Back</a>
                <?php elseif (isset($_GET['error'])) : ?>
                    <h1>
                        <i class="ion-android-cancel text-danger"></i>
                        Error
                    </h1>
                    <h1>SQL Error</h1>
                    <p>Look's like there's an error in connectiong with sql server</p>
                    <a href="index.php" class="btn btn-primary">Go Back</a>
                <?php else : ?>

                <?php endif;?>
            </div>
        </div>
    </div>
</body>
</html>
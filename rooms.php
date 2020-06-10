<?php

    include_once('db.php');
    $fetch = new Fetch;
    $getRooms = $fetch->getRooms();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rooms - Hotel Bravo</title>
        <!-- External CSS libraries -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/reservation.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Icon -->
        <link rel="stylesheet" href="icon/css/ionicons.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:400,500,700|Roboto:300,400,900&display=swap" rel="stylesheet">
    </head>
    <body dir="ltr">
        <header class="header">
            <div class="container h-100">

                <nav class="navbar navbar-expand-lg navbar-light h-100 p-0">

                    <a class="navbar-brand text-dark" href="index.php">Bravo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end h-100" id="navbarNavAltMarkup">
                        <div class="navbar-nav align-items-center h-100">

                            <a class="text-dark p-2" href="index.php">Home <span class="sr-only">(current)</span></a>
                            <a class="text-dark p-2" href="room.php">Rooms</a>
                            <a class="text-dark p-2" href="#facilities">Facilities</a>

                        </div>

                    </div>

                </nav>
                
            </div>
        </header>

        <section id="main-room" class="py-5">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-12">
                        <div class="title text-center">
                            <h3>Room Types</h3>
                        </div>
                    </div>
                </div>

                <div class="row py-5">

                    <?php foreach ($getRooms as $room) : ?>

                        <div class="col-lg-4 mb-5">
                           
                                <div class="room-block text-center">
                                    <div class="img-section mb-3">
                                    <a href="view-room.php?id=<?php echo $room['room_id']; ?>" class="anchor">
                                        <img src="img/<?php echo $room['room_img']; ?>" alt="room" class="img-fluid">
                                    </a>
                                    </div>
                                    <div class="desc-section">
                                        <h4><?php echo $room['room_name']; ?></h4>
                                        <h3>
                                            <span class="room_price">MY <?php echo $room['room_price']; ?></span>
                                            <span class="mr-2">/night</span>
                                            <i class="ion-android-contact"></i>
                                            <?php echo $room['room_occupancy']; ?>
                                        </h3>
                                    </div>
                                </div>
                            
                        </div>

                    <?php endforeach; ?>
                </div>
                
            </div>
        </section>

        
        <footer class="py-4">
            <div class="footer-inner">
                <div class="container text-center">
                    <div class="footer-links d-flex justify-content-center">
                        <ul class="d-flex">
                            <li class="mr-3"><a href="">Home</a></li>
                            <li class="mr-3"><a href="">Contact Us</a></li>
                            <li class="mr-3"><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                        </ul>
                    </div>
                
                    <div class="social-link">
                        <a href="#"><i class="ion-social-facebook"></i></a>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                    </div>

                    <div class="copyright">
                        <p>&copy; <?php echo date('Y'); ?> Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>
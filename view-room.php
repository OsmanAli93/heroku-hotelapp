<?php       

    include_once('db.php');

    $id = $_GET['id'];

    $fetch = new Fetch;
    $singleRoom = $fetch->getSingleRoom($id);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $singleRoom['room_name']; ?> - Hotel Bravo</title>
        <!-- External CSS libraries -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/reservation.css">
        <!-- Icon -->
        <link rel="stylesheet" href="icon/css/ionicons.css">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:400,500,700|Roboto:300,400,900&display=swap" rel="stylesheet">
    </head>
    <body dir="ltr">
        <header class="main-header py-3">
            <div class="container h-100">

                <nav class="navbar navbar-expand-lg navbar-light h-100 p-0">

                    <a class="navbar-brand" href="index.php">Bravo</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end h-100" id="navbarNavAltMarkup">
                        <div class="navbar-nav align-items-center h-100">

                            <a class="nav-item nav-link" href="#banner">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#room">Rooms</a>
                            <a class="nav-item nav-link" href="#facilities">Facilities</a>
                            
                            <div class="login-container d-flex justify-content-between p-0 ml-3">
                                <a href="" class="btn custom">Create Account</a>
                            </div>

                        </div>

                    </div>

                </nav>
                
            </div>
        </header>

        <section id="view-room" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <img src="img/<?php echo $singleRoom['room_img']; ?>" alt="room-img" class="img-fluid">
                    </div>
                    <div class="col-lg-5">
                        <h2><?php echo $singleRoom['room_name']; ?></h2>
                        <p>(Occupancy: <?php echo $singleRoom['room_occupancy']; ?>pax)</p>
                        <h2 class="mb-4">Room Rates</h2>
                        <table class="table-bordered w-100">
                            <tbody>
                                <tr>
                                    <td class="p-2">Normal</td>
                                    <td class="p-2"><strong>RM <?php echo $singleRoom['room_price']; ?></strong>/night</td>
                                </tr>
                                <tr>
                                    <td class="p-2">Member</td>
                                    <td class="p-2"><strong>RM <?php echo ($singleRoom['room_price'] - 10); ?>.00</strong>/night</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="py-4">All our rooms are fully air-conditioned, complimentary WIFI connectivity and Flat screen LED TV designed to provide our in house guests with a comfortable and restful night sleep.</p>
                        <div class="list">

                            <div class="row">

                                <div class="col-lg-6">
                                    <ul class="w-100">
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            Free WIFI
                                        </li>
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            Bath Amenities
                                        </li>
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            Heater
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="w-100">
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            LED TV
                                        </li>
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            Coffee and Tea
                                        </li>
                                        <li>
                                            <i class="ion-ios-checkmark"></i>
                                            Drinking Water
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
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
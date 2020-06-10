

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bravo</title>
    <!-- External CSS libraries -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Icon -->
    <link rel="stylesheet" href="icon/css/ionicons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Playfair+Display:400,500,700|Roboto:300,400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
</head>
<body dir="ltr">
    <div id="scrollToTop">
        <i class="ion-ios-arrow-up"></i>
    </div>
    
    <header class="main-header">
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

    <div id="banner" class="vh-100">
        <div class="inner-banner h-100">
            <div class="slides-container h-100">
                <div class="slider h-100 d-flex flex-nowrap">

                    <div class="slide-item clone-item-last">
                        <img src="./img/banner-slider-3.jpg" alt="banner-img">
                        <div class="slide-item-inner h-100 d-flex justify-content-center align-items-center">
                            <div class="slide-content text-center">
                                <h1><span>Best Place</span> For Relux</h1>
                                <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetue</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-md">Get Started Now</a>
                                    <a href="#" class="btn btn-md">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END -->

                    <div class="slide-item">
                        <img src="./img/banner-slider-1.jpg" alt="banner-img">
                        <div class="slide-item-inner h-100 d-flex justify-content-center align-items-center">
                            <div class="slide-content text-center">
                                <h1><span>Welcome to </span>Bravo Hotel</h1>
                                <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetue</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-md">Get Started Now</a>
                                    <a href="#" class="btn btn-md">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                    <div class="slide-item">
                        <img src="./img/banner-slider-2.jpg" alt="banner-img">
                        <div class="slide-item-inner h-100 d-flex justify-content-center align-items-center">
                            <div class="slide-content text-center">
                                <h1><span>Best place to</span> find room</h1>
                                <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetue</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-md">Get Started Now</a>
                                    <a href="#" class="btn btn-md">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- END -->
                    <div class="slide-item">
                        <img src="./img/banner-slider-3.jpg" alt="banner-img">
                        <div class="slide-item-inner h-100 d-flex justify-content-center align-items-center">
                            <div class="slide-content text-center">
                                <h1><span>Best Place</span> for relux</h1>
                                <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetue</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-md">Get Started Now</a>
                                    <a href="#" class="btn btn-md">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END -->
                    <div class="slide-item clone-item-first">
                        <img src="./img/banner-slider-1.jpg" alt="banner-img">
                        <div class="slide-item-inner h-100  d-flex justify-content-center align-items-center">
                            <div class="slide-content text-center">
                                <h1><span>Welcome to</span> Bravo Hotel</h1>
                                <p>Lorem ipsum dolor sit amet, conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetue</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-md">Get Started Now</a>
                                    <a href="#" class="btn btn-md">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END-->

            <div class="arrow-container">
                <button class="arrow arrow-left">
                    <i class="ion-chevron-left"></i>
                </button>
                <button class="arrow arrow-right">
                    <i class="ion-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>

    <section id="search-rooms" class="py-5">
        <div class="container">
            <div class="search-container">
                <form action="reservation/room_types.php" method="POST">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <h3>Search</h3>
                                <h2>Your <span>Rooms</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" name="checkin" id="arrival" autocomplete="off" class="form-control datepicker" placeholder="Check In" value="">
                            </div>
                            <select name="adult" class="form-control">
                                <option value="">Adult</option>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" name="checkout" id="departure" autocomplete="off" class="form-control datepicker" placeholder="Check Out" value="">
                            </div>
                            <select name="child" class="form-control">
                                <option value="">Child</option>
                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <input type="text" class="form-control" id="total_night" name="nights" placeholder="Night" readonly value="">
                            </div>
                            <button type="submit" name="submit" class="btn-custom text-uppercase font-weight-bold">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id="bravo-hotel" class="section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 ">
                    <div class="text text-center">
                        <h5>Hotel Bayview</h5>
                        <h1>Welcome To Hotel Bravo</h1>
                        <p>Duis vel nisl lacinia, facilisis in, consectetur leon vestibulum et ullamcorper tortor leon placerat mauris tincidunt ut non velit faucibus nam a pretium sapien nunc quis congue purus nunc feugiat nec purus a ultricies suspendisse in fringilla est sodales dui, non mattis tortor volutpat vitae.</p>
                        <div class="text-center">
                            <a href="#" class="btn custom-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-1">
                    <img src="./img/b.jpg" alt="room-picture" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="room" class="section-gap">
        <div class="container">
            <div class="main-title">
                <h1>Our Best Rooms</h1>
                <p>These best rooms chosen by our customers</p>
            </div>

            <div class="row">
                
                <?php 
                
                    include_once('db.php');
                    $fetch = new Fetch;
                    $getRooms = $fetch->getRooms();
                ?>

                <?php foreach ($getRooms as $room) : ?>
                    <div class="col-lg-4 mb-5">
                        <div class="room-block h-100">
                            
                            <a href="view-room.php?id=<?php echo $room['room_id']; ?>">
                                <div class="img-wrapper">
                                    <img src="./img/<?php echo $room['room_img']; ?>" alt="bed-img" class="img-fluid">
                                </div>
                                <div class="room-text">
                                    <div class="room-desc d-flex justify-content-between py-2">
                                        <h3><?php echo $room['room_name']; ?></h3>
                                        <h5 class="price">$<?php echo $room['room_price']; ?><sub>/night</sub></h5>
                                    </div>
                                    <p>
                                        <i class="ion-android-contact mr-2 pt-1"></i> 2
                                    </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </a>
                           
                        </div>
                    </div>
                <?php endforeach; ?>
               
            </div>
        </div>
    </section>

    <section id="facilities" class="section-gap">
        <div class="container">
            <div class="main-title">
                <h1>Our Facilities</h1>
                <p>Check out our hotel facilities</p>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-ios-telephone"></i>
                        </div>
                        <div class="item-desc">
                            <h3>24-hour Reception</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
                <div class="col-lg-4 mb-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-home"></i>
                        </div>
                        <div class="item-desc">
                            <h3>Room Service</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
                <div class="col-lg-4 mb-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-monitor"></i>
                        </div>
                        <div class="item-desc">
                            <h3>Flat Screen TV</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
                <div class="col-lg-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-android-watch"></i>
                        </div>
                        <div class="item-desc">
                            <h3>Gym</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
                <div class="col-lg-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-android-car"></i>
                        </div>
                        <div class="item-desc">
                            <h3>Free Parking</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
                <div class="col-lg-4">
                    <div class="item d-flex">
                        <div class="icon-container pr-4">
                            <i class="ion-wifi"></i>
                        </div>
                        <div class="item-desc">
                            <h3>Free Wi-Fi</h3>
                            <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia voluptate laboriosam</p>
                        </div>
                    </div>
                </div>
                <!--END-->
            </div>
        </div>
    </section>

    <footer id="main-footer" class="section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-block">
                        <h3>Bravo</h3>
                        <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam.</p>
                    </div>
                </div>
                <!-- END -->
                <div class="col-lg-3">
                    <div class="footer-block">
                        <h1 class="footer-title">Contact Us</h1>
                        <ul class="personal-info mb-4">
                            <li class="mb-3"><i class="ion-android-pin pr-3"></i>Address: 44 New Design Street,</li>
                            <li class="mb-3"><i class="ion-android-mail pr-3"></i>Email:info@themevessel.com</li>
                            <li class="mb-3"><i class="ion-android-call pr-3"></i>Phone: +0477 85X6 552</li>
                            <li><i class="ion-android-print pr-3"></i>Fax: +0477 85X6 552</li>
                        </ul>
                        <div class="socials">
                            <a href="#"><i class="ion-social-facebook"></i></a>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                            <a href="#"><i class="ion-social-snapchat"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END -->
                <div class="col-lg-3">
                    <div class="footer-block">
                        <h1 class="footer-title">Gallery</h1>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <img src="./img/king-bed.jpg" alt="king" class="img-fluid">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <img src="./img/family-bed.jpg" alt="family" class="img-fluid">
                            </div>
                            <div class="col-lg-4 mb-4">
                                <img src="./img/standard-bed.jpg" alt="king" class="img-fluid">
                            </div>
                            <div class="col-lg-4">
                                <img src="./img/super-deluxe.jpg" alt="king" class="img-fluid">
                            </div>
                            <div class="col-lg-4">
                                <img src="./img/triple-deluxe.jpg" alt="king" class="img-fluid">
                            </div>
                            <div class="col-lg-4">
                                <img src="./img/standard-twins.jpg" alt="king" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END -->
                <div class="col-lg-3">
                    <div class="footer-block">
                        <h1 class="footer-title">Newsletter</h1>
                        <div class="newsletter-body">
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <form action="">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-custom text-uppercase">Signup</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container text-center">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Theme Vessel. Trade  Trademarks and brands are the property of their respective owners.</p>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/plugin.js"></script>
</body>
</html>

<?php 

    session_start();

    include_once('../inc/header.php');
    include_once('../db.php');
    $mysqli = new Database;
    $conn = $mysqli->connect();

    $data = [
        
        "room_name" => $_POST['room_type_name'],
        "room_id" => $_POST['room_type_id'],
        "room_qty" => $_POST['room_type_qty'],
        "room_prc" => $_POST['room_type_prc'],
        "room_amt" => $_POST['room_type_amt'],
        "checkin" => $_SESSION['checkin'],
        "checkout" => $_SESSION['checkout'],
        "total_nights" => $_SESSION['nights']
        
    ];

    $_SESSION['room_details'] = $data;
    
    
?>

<section id="main">
    <div class="container">
        

        <div class="row my-5">
            <div class="col-lg-12">
                <div class="title text-center">
                    <h1>Room Reservation <span class="sub-title">Step 2</span></h1>
                    <h3>Please provide Guest Information to us</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
            
                <form action="../process.php" method="POST">
                

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="national">Nationality <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <select name="national" id="national" class="form-control">
                                            <option value="">-- Please Select --</option>
                                            <option value="MY">Malaysia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="passport">No IC / Passport <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="passport" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="first_name">First Name <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="passport">Last Name <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="last_name" id="last_name" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="addr_one">Address Line 1 <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="addr_one" id="addr_one" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="addr_two">Address Line 2 <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="addr_two" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="city">City <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="city" id="city" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="state">State <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="state" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="postal_code">Postal Code <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="postal_code" id="postal_code" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="country">Country <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <select name="country" id="country" class="form-control">
                                            <option value="">-- Please Select --</option>
                                            <option value="MY">Malaysia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="email">Email<span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-4 text-right px-1">
                                        <label for="contact">Contact No <span class="text-danger mb-00">*</span></label>
                                    </div>
                                    <div class="col-lg-8 px-1">
                                        <input type="text" name="contact" id="contact" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <! -- END -->

                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-2 text-right px-1">
                                        <label for="message">Special Request<span class="d-block mb-0">(Optional)</span></label>
                                    </div>
                                    <div class="col-lg-10 px-1">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                    <! -- END -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" name="submit-guest" class="submit-guest btn btn-success">Next Step</button>
                            </div>
                        </div>
                    </div>

                    <p>All fields marked with an asterisk (*) are required.</p>
                </form>

            </div>
        </div>
        
        <footer id="footer-guest">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="socmedia d-flex justify-content-center mb-0">
                        <li class="px-3"><a href="#">Home</a></li>
                        <li class="px-3"><a href="#">Contact Us</a></li>
                        <li class="px-3"><a href="#">Privacy Policy</a></li>
                        <li class="px-3"><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
           
        </footer>
    </div>
</section>
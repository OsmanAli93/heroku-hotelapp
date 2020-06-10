<?php 
    session_start();
    include_once '../class.php';
    
    $sql = "SELECT * FROM hotel_room";
    $room = new Fetch;
    $getRooms = $room->getRooms();
    
    $_SESSION['checkin'] = $_POST['checkin'];
    $_SESSION['checkout'] = $_POST['checkout'];
    $_SESSION['nights'] = $_POST['nights'];
?>


<?php include '../inc/header.php'; ?>


<section class="pt-5">
    <div class="container">
        <div class="row pb-5 mb-5">
            <div class="col-lg-12 text-center">
                <h2><b>Room Reservation</b> - Choose a Room <small>Step 1</small></h2>
                <p>Rates are per room, per night, vary by arrival date and/or length of stay, and include service charges. <br> ** Rates will be imposed with 0% Sales & Services Tax (SST) (Effective 1 March 2020 - 31 August 2020)</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">

                <?php foreach ($getRooms as $row) : ?>

                <div class="room-type-block">
                    <div class="row mx-0">
                        <div class="col-lg-4 p-0">
                            <img src="../img/<?php echo $row['room_img']; ?>" alt="twins" class="img-fluid mb-3">
                        </div>

                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1 class="room-title"><?php echo $row['room_name']; ?></h1>
                                    <p class="room-desc">All our rooms are fully air-conditioned, complimentary WIFI connectivity and Flat screen LED TV designed to provide our in house guests with a comfortable and restful night sleep.</p>
                                    <div class="d-flex justify-content-between">
                                        <ul class="room-items">
                                            <li><i class="ion-android-done"></i>Free WIFI</li>
                                            <li><i class="ion-android-done"></i>Bath Ameneties</li>
                                            <li><i class="ion-android-done"></i>Heater</li>
                                        </ul>
                                        <ul class="room-items">
                                            <li><i class="ion-android-done"></i>Free WIFI</li>
                                            <li><i class="ion-android-done"></i>Bath Ameneties</li>
                                            <li><i class="ion-android-done"></i>Heater</li>
                                        </ul>
                                    </div>
                                    <p class="rate-text">Rates are subject to change without prior notice.</p>
                                </div>

                                <div class="col-lg-4 p-0">
                                    <div class="price-container">
                                        <h3>RM <?php echo $row['room_price']; ?><span>/night</span></h3>

                                        <div class="room-counter">
                                            <div class="form-group">
                                                <label for="control-label">No. of Room</label>
                                                <div class="room-count-btn">
                                                    <input type="text" class="form-control" id="qty_<?php echo $row['room_id']; ?>" readonly min="1" value="1">
                                                    <div class="room-btn-vertical">
                                                        <button type="button" class="count-up" id="<?php echo $row['room_id']; ?>"><i class="ion-android-arrow-dropup"></i></button>
                                                        <button type="button" class="count-down" id="<?php echo $row['room_id']; ?>"><i class="ion-android-arrow-dropdown"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="name_<?php echo $row['room_id']; ?>" value="<?php echo $row['room_name']; ?>">
                                            <input type="hidden" id="prc_<?php echo $row['room_id']; ?>" value="<?php echo $row['room_price']; ?> ">
                                            <input type="hidden" id="amt_<?php echo $row['room_id']; ?>" value="<?php echo $row['room_price']; ?>">
                                            <button type="button" id="button_<?php echo $row['room_id']; ?>" data-id=<?php echo $row['room_id']; ?> class="btn btn-book">Book</button>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END -->
                
                <?php endforeach; ?>
                
               
            </div>

            <div class="col-lg-4">
                <div class="right-content">
                    <h3 class="text-uppercase mb-0">Room booking summary</h3>
                    <div class="summary-details">
                        <div class="details-block">
                            <p class="checkin">Check-in Date</p>
                            <p class="datein font-weight-bold"><?php echo htmlspecialchars($_SESSION['checkin']); ?></p>
                        </div>
                        <div class="details-block">
                            <p class="checkout">Check-out Date</p>
                            <p class="dateout font-weight-bold"><?php echo htmlspecialchars($_SESSION['checkout']); ?></p>
                        </div>
                        <div class="details-block">
                            <p class="night">Night(s)</p>
                            <p class="pernight font-weight-bold"><?php echo htmlspecialchars($_SESSION['nights']); ?></p>
                        </div>
                        <div class="details-block">
                            <p class="adult">Aldut(s)</p>
                            <p class="peraldut font-weight-bold">1</p>
                        </div>
                        <div class="details-block">
                            <p class="child">Child(s)</p>
                            <p class="perchild font-weight-bold">0</p>
                        </div>

                        <h4 class="my-3">Room Selected</h4>

                        <table id="summaryRoomSelected" class="table table-condensed">
                            <thead>
                               <tr>
                                    <th class="flex">Room Type</th>
                                    <th class="text-center">Qty</th>
                                    <th class="text-right">Amount</th>
                                    <th>&nbsp</th>
                               </tr>
                            </thead>
                            <tbody id="bkgDtls"></tbody>
                        </table>

                        <div id="summarySubTotal" class="mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="text-danger font-weight-light total">Total (RM)</span>
                                </div>
                                <div class="col-lg-6">
                                    <span id="bkgTtl" class="text-danger font-weight-bold">0.00</span>
                                </div>
                            </div>
                        </div>

                        <form action="guest_info.php" method="POST" id="frmIndexCore" class="text-right">
                            <p class="text-right">
                                <button type="submit" name="submit" class="btn btn-next">Next Step</button>
                            </p>
                        </form>
                        
                       

                        <div class="desc">
                            <p>* No 6% Digital Tax charges<br>* Non-refundable booking cancellations</p>
                            <p>Effective 1st September 2017, foreign (non-Malaysian) guests are required to pay a Tourism Tax of MYR10 per room per night upon check-in, in accordance with the Malaysian Tourism Tax Act 2017.</p>
                        </div>
                    </div>
                    <div id="text"></div>
                </div>
            </div>
            
        </div>
    </div>
</section>



<script src="../js/booking.js"></script>

<?php include '../inc/footer.php'; ?>
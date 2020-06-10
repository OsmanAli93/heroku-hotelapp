<?php

    class Database {

        public function connect () {
            /* LOCAL
            $this->server = 'localhost';
            $this->username = 'root';
            $this->password = '123';
            $this->dbName = 'hotel';
            */

            // REMOTE
            $this->server = 'us-cdbr-east-05.cleardb.net';
            $this->username = 'b09d899a9da863';
            $this->password = 'dd84ad24';
            $this->dbName = 'heroku_cd4f98ba596ba81';

            $conn = new  mysqli($this->server, $this->username, $this->password, $this->dbName);

            if ($conn->connect_error) {

                die("Connection failed: " . $conn->connect_error);
            }

            return $conn;

            $conn->close();
        }
    }

    class Fetch extends Database {
        
        public function getRooms () {

            $sql = "SELECT * FROM hotel_room";
            $result = $this->connect()->query($sql);
            $rows = $result->num_rows;

            if ($rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $data[] = $row;
                }
            }

            return $data;

        }

        public function getSingleRoom ($roomId) {

            $sql = "SELECT * FROM hotel_room WHERE room_id = $roomId";
            $result = $this->connect()->query($sql);
            $rows = $result->num_rows;

            if ($rows > 0) {

                while ($row = $result->fetch_assoc()) {

                    $data = $row;
                }
                
            }

            return $data;
        }


        public function checkEmail($email) {

            $mysqli = $this->connect();
            $sql = "SELECT email FROM guest WHERE email=?;";
            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql)) {

                header('Location: process.php?error=sqlerror');
                exit();

            } else {

                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->num_rows;

                return $row;
            }

            $stmt->close();
            $mysqli->close();
        
        }


        public function checkRoomsAvailable ($roomId, $roomCount) {

            $sql = "SELECT * FROM hotel_room WHERE room_id = $roomId";
            $result = $this->connect()->query($sql);

            while ($row = $result->fetch_assoc()) {

                $data = $row['room_qty'];
            }
            
            if ($roomCount > $data) {
                
                echo '0';

            } else {

                echo '1';
                   
            }
        
        }    

    }

    class Bookings extends Database {

        public function updateBookingRoom ($room_details, $guest) {

            $mysqli = $this->connect();
            $sql = "INSERT INTO reservation(
                guest_id, 
                room_name, 
                room_qty, 
                room_prc, 
                room_amt, 
                checkin, 
                checkout, 
                total_nights
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
            
            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql)) {

                header('Location: process.php?error=sqlerror');
                exit();

            } else {

                $stmt->bind_param("ssiddssi", $guestId, $room, $qty, $prc, $amt, $checkin, $checkout, $night);

                for ($i = 0; $i < count($room_details['room_id']); $i++) {

                    $guestId = $guest['email'];
                    $room = $room_details['room_name'][$i];
                    $qty = $room_details['room_qty'][$i];
                    $prc = $room_details['room_prc'][$i];
                    $amt = $room_details['room_amt'][$i];
                    $checkin = $room_details['checkin'];
                    $checkout = $room_details['checkout'];
                    $night = $room_details['total_nights'];
                
                    $stmt->execute();
                }

                $stmt->close();
                $mysqli->close();

                header('Location: process.php?status=success&room_id=' . $room);
            }
           
        }

        public function updateBookingGuest ($guest_details) {

            $mysqli = $this->connect();
            $sql = "INSERT INTO `guest`(
                email,
                first_name,
                last_name,
                ic_passport,
                address_1,
                address_2,
                city,
                state,
                postal,
                nationality,
                country,
                contact,
                special_request
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql)) {

                header('Location: process.php?error=sqlerrorguest');
                exit();

            } else {

                $stmt->bind_param(
                    "sssssssssssss",
                    $guest_details['email'],
                    $guest_details['first_name'],
                    $guest_details['last_name'],
                    $guest_details['passport'],
                    $guest_details['address_1'],
                    $guest_details['address_2'],
                    $guest_details['city'],
                    $guest_details['state'],
                    $guest_details['postal'],
                    $guest_details['nationality'],
                    $guest_details['country'],
                    $guest_details['contact'],
                    $guest_details['special_request']
                );

                $stmt->execute();
            }

            $stmt->close();
            $mysqli->close();

        }

        public function updateRooms ($data) {

            $mysqli = $this->connect();   
            $sql =  "UPDATE `hotel_room` SET room_qty = room_qty - ? WHERE room_id = ?;";
            $stmt = $mysqli->stmt_init();

            if (!$stmt->prepare($sql)) {

                header('Location: process.php?error=sqlerror');
                exit();

            } else {

                $stmt->bind_param("ss", $qty, $room);

                for ($i = 0; $i < count($data['room_id']); $i++) {

                    $qty = $data['room_qty'][$i];
                    $room = $data['room_id'][$i];

                    $stmt->execute();
                }

                $stmt->close();
                $mysqli->close();

                //header('Location: index.php?updatedroom=success');
            }
            
        }
     }


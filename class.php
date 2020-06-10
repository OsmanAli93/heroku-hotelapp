<?php

    include_once 'db.php';
    $mysqli = new Database;
    
    if (isset($_POST['room_id']) && $_POST['no_room']) {

        $roomId = $_POST['room_id'];
        $roomCount = $_POST['no_room'];
        
        $update_room = new Fetch;
        $check_rooms = $update_room->checkRoomsAvailable($roomId, $roomCount);
        
        
    }

    


    
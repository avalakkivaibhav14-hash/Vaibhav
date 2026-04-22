<?php
session_start();
include("../config/db.php");

$usn = $_SESSION['usn'];

if(isset($_POST['book'])){
    $room = $_POST['room'];

    $conn->query("UPDATE rooms SET status='Booked' WHERE room_no='$room'");
    $conn->query("UPDATE students SET room_no='$room' WHERE usn='$usn'");

    echo "Room Booked Successfully!";
}

$result = $conn->query("SELECT * FROM rooms WHERE status='Available'");
?>

<h2>Available Rooms</h2>

<form method="POST">
    <select name="room">
        <?php while($row = $result->fetch_assoc()) { ?>
            <option><?php echo $row['room_no']; ?></option>
        <?php } ?>
    </select>
    <button name="book">Book Room</button>
</form>
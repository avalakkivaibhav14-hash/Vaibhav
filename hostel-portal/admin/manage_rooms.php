<?php
include("../config/db.php");

if(isset($_POST['add'])){
    $room = $_POST['room'];
    $block = $_POST['block'];

    $conn->query("INSERT INTO rooms(room_no, block) VALUES('$room','$block')");
}

?>

<h2>Add Room</h2>

<form method="POST">
    Room No: <input name="room"><br>
    Block: <input name="block"><br>
    <button name="add">Add Room</button>
</form>
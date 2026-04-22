<?php
session_start();
include("../config/db.php");

$usn = $_SESSION['usn'];

if(isset($_POST['submit'])){
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO complaints(usn, complaint) VALUES('$usn','$complaint')";
    $conn->query($sql);

    echo "Complaint Submitted!";
}
?>

<form method="POST">
    <textarea name="complaint" placeholder="Enter complaint"></textarea><br>
    <button name="submit">Submit</button>
</form>
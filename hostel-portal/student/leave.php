<?php
session_start();
include("../config/db.php");

$usn = $_SESSION['usn'];

if(isset($_POST['submit'])){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO leaves(usn, from_date, to_date, reason) 
            VALUES('$usn','$from','$to','$reason')";
    $conn->query($sql);

    echo "Leave Applied!";
}
?>

<form method="POST">
    From: <input type="date" name="from"><br>
    To: <input type="date" name="to"><br>
    <textarea name="reason"></textarea><br>
    <button name="submit">Apply</button>
</form>
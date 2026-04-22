<?php
include("../config/db.php");

if(isset($_POST['add'])){
    $usn = $_POST['usn'];
    $amount = $_POST['amount'];

    $conn->query("UPDATE students SET penalty = penalty + $amount WHERE usn='$usn'");
}
?>

<form method="POST">
    USN: <input name="usn"><br>
    Amount: <input name="amount"><br>
    <button name="add">Add Penalty</button>
</form>
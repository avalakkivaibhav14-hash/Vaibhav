<?php
session_start();
include("config/db.php");

$usn = $_POST['usn'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE usn='$usn'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if ($password == $row['password']) {
        $_SESSION['usn'] = $usn;
        header("Location: student/dashboard.php");
    } else {
        echo "Wrong Password";
    }
} else {
    echo "User Not Found";
}
?>
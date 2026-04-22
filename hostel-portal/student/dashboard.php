<?php
session_start();
include("../config/db.php");

$usn = $_SESSION['usn'];

$sql = "SELECT * FROM students WHERE usn='$usn'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Student Dashboard</h2>

<p>Name: <?php echo $row['name']; ?></p>
<p>USN: <?php echo $row['usn']; ?></p>
<p>Hostel Block: <?php echo $row['hostel_block']; ?></p>
<p>Room No: <?php echo $row['room_no']; ?></p>
<p>Fees Due: <?php echo $row['fees_due']; ?></p>
<p>Penalty: <?php echo $row['penalty']; ?></p>

<a href="complaint.php">Submit Complaint</a><br>
<a href="leave.php">Apply Leave</a><br>
<a href="../logout.php">Logout</a>
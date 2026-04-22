<?php
include("../config/db.php");

$students = $conn->query("SELECT COUNT(*) as total FROM students")->fetch_assoc();
$complaints = $conn->query("SELECT COUNT(*) as total FROM complaints")->fetch_assoc();
$leaves = $conn->query("SELECT COUNT(*) as total FROM leaves")->fetch_assoc();
?>

<h2>Admin Dashboard</h2>

<p>Total Students: <?php echo $students['total']; ?></p>
<p>Total Complaints: <?php echo $complaints['total']; ?></p>
<p>Total Leaves: <?php echo $leaves['total']; ?></p>

<a href="add_student.php">Add Student</a><br>
<a href="manage_rooms.php">Manage Rooms</a><br>
<a href="complaints.php">Manage Complaints</a><br>
<a href="leave_manage.php">Manage Leaves</a><br>
<a href="penalty.php">Penalty</a><br>
<a href="add_menu.php">Mess Menu</a>
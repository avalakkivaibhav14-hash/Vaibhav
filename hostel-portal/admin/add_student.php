<?php
session_start();
include("../config/db.php");

//  only admin can access
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../index.html");
    exit();
}

if(isset($_POST['submit'])){

    // Get form data
    $usn = $_POST['usn'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];

    // Remove extra spaces
    $name = trim($name);

    // Generate password
    $prefix = strtoupper(substr($name, 0, 3));   // First 3 letters
    $date = date("dmy", strtotime($dob));        // DDMMYY format
    $password = $prefix . $date;

    // SQL query
    $sql = "INSERT INTO students(usn, name, password, dob, role)
            VALUES('$usn', '$name', '$password', '$dob', 'student')";

    if($conn->query($sql)){
        echo "<h3 style='color:green;'>Student Added Successfully!</h3>";
        echo "<p><b>Generated Login Details:</b></p>";
        echo "USN: $usn <br>";
        echo "Password: <b>$password</b>";
    } else {
        echo "<h3 style='color:red;'>Error: " . $conn->error . "</h3>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    USN: <input type="text" name="usn" required><br><br>
    Name: <input type="text" name="name" required><br><br>
    DOB: <input type="date" name="dob" required><br><br>

    <button type="submit" name="submit">Add Student</button>
</form>

<br>
<a href="dashboard.php">Back to Dashboard</a>

</body>
</html>
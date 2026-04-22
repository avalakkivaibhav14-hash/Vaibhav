<?php
include("../config/db.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $status = $_POST['status'];

    $conn->query("UPDATE leaves SET status='$status' WHERE id=$id");
}

$result = $conn->query("SELECT * FROM leaves");
?>

<h2>Leave Requests</h2>

<?php while($row = $result->fetch_assoc()) { ?>
<form method="POST">
    <p><?php echo $row['reason']; ?></p>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <select name="status">
        <option>Pending</option>
        <option>Approved</option>
        <option>Rejected</option>
    </select>
    <button name="update">Update</button>
</form>
<?php } ?>
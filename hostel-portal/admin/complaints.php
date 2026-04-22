<?php
include("../config/db.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $status = $_POST['status'];

    $conn->query("UPDATE complaints SET status='$status' WHERE id=$id");
}

$result = $conn->query("SELECT * FROM complaints");
?>

<h2>Complaints</h2>

<?php while($row = $result->fetch_assoc()) { ?>
<form method="POST">
    <p><?php echo $row['complaint']; ?></p>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <select name="status">
        <option>Pending</option>
        <option>Resolved</option>
    </select>
    <button name="update">Update</button>
</form>
<?php } ?>
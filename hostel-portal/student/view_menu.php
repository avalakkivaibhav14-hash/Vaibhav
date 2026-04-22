<?php
include("../config/db.php");

$result = $conn->query("SELECT * FROM mess_menu");
?>

<h2>Mess Menu</h2>

<?php while($row = $result->fetch_assoc()) { ?>
    <p>
        <b><?php echo $row['day']; ?></b><br>
        Breakfast: <?php echo $row['breakfast']; ?><br>
        Lunch: <?php echo $row['lunch']; ?><br>
        Dinner: <?php echo $row['dinner']; ?><br>
    </p>
<?php } ?>
<?php
include("../config/db.php");

if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];

    $conn->query("INSERT INTO mess_menu(day, breakfast, lunch, dinner)
                  VALUES('$day','$breakfast','$lunch','$dinner')");
}
?>

<form method="POST">
    Day: <input name="day"><br>
    Breakfast: <input name="breakfast"><br>
    Lunch: <input name="lunch"><br>
    Dinner: <input name="dinner"><br>
    <button name="submit">Add Menu</button>
</form>
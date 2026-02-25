<?php
include "config.php";

if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $total = $_POST['total'];
    $present = $_POST['present'];

    $conn->query("INSERT INTO attendance (roll_no, total_days, present_days) VALUES ('$roll','$total','$present')");
    $msg = "Attendance Added Successfully!";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Add Attendance</h2>

    <?php if(isset($msg)) echo "<p style='color:yellow;'>$msg</p>"; ?>

    <form method="POST">
        <input type="text" name="roll" placeholder="Roll Number" required>
        <input type="number" name="total" placeholder="Total Days" required>
        <input type="number" name="present" placeholder="Present Days" required>
        <button type="submit" name="add">Add Attendance</button>
    </form>

    <a href="dashboard.php" class="back-btn">⬅ Back</a>
</div>
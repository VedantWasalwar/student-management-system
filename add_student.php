<?php
include "config.php";

if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $class = $_POST['class'];

    $conn->query("INSERT INTO students (roll_no, name, class) VALUES ('$roll','$name','$class')");
    $msg = "Student Added Successfully!";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Add Student</h2>

    <?php if(isset($msg)) echo "<p style='color:yellow;'>$msg</p>"; ?>

    <form method="POST">
        <input type="text" name="roll" placeholder="Roll Number" required>
        <input type="text" name="name" placeholder="Student Name" required>
        <input type="text" name="class" placeholder="Class" required>
        <button type="submit" name="add">Add Student</button>
    </form>

    <a href="dashboard.php" class="back-btn">⬅ Back</a>
</div>
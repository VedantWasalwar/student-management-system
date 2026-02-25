<?php
include "config.php";

if(isset($_POST['add'])){
    $roll = $_POST['roll'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $conn->query("INSERT INTO marks (roll_no, subject, marks) VALUES ('$roll','$subject','$marks')");
    $msg = "Marks Added Successfully!";
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Add Marks</h2>

    <?php if(isset($msg)) echo "<p style='color:yellow;'>$msg</p>"; ?>

    <form method="POST">
        <input type="text" name="roll" placeholder="Roll Number" required>
        <input type="text" name="subject" placeholder="Subject Name" required>
        <input type="number" name="marks" placeholder="Marks" required>
        <button type="submit" name="add">Add Marks</button>
    </form>

    <a href="dashboard.php" class="back-btn">⬅ Back</a>
</div>
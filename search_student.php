<?php
include "config.php";
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Search Student</h2>

    <form method="POST">
        <input type="text" name="roll" placeholder="Enter Roll Number" required>
        <button type="submit" name="search">Search</button>
    </form>

    <?php
    if(isset($_POST['search'])){
        $roll = $_POST['roll'];

        $student = $conn->query("SELECT * FROM students WHERE roll_no='$roll'");
        $marks = $conn->query("SELECT * FROM marks WHERE roll_no='$roll'");
        $attendance = $conn->query("SELECT * FROM attendance WHERE roll_no='$roll'");

        echo "<br><h3>Details:</h3>";

        while($row = $student->fetch_assoc()){
            echo "Name: ".$row['name']."<br>";
            echo "Class: ".$row['class']."<br><br>";
        }

        echo "<strong>Marks:</strong><br>";
        while($row = $marks->fetch_assoc()){
            echo $row['subject']." - ".$row['marks']."<br>";
        }

        echo "<br><strong>Attendance:</strong><br>";
        while($row = $attendance->fetch_assoc()){
            echo $row['present_days']." / ".$row['total_days']."<br>";
        }
    }
    ?>

    <a href="dashboard.php" class="back-btn">⬅ Back</a>
</div>
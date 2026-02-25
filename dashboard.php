<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container dashboard">
    <h2>Admin Dashboard</h2>

    <a href="add_student.php">Add Student</a>
    <a href="add_marks.php">Add Marks</a>
    <a href="add_attendance.php">Add Attendance</a>
    <a href="search_student.php">Search Student</a>
    <a href="logout.php">Logout</a>
</div>
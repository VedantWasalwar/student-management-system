<?php
session_start();
include "config.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");

    if($result->num_rows > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid Login!";
    }
}
?>

<link rel="stylesheet" href="css/style.css">

<div class="container">
    <h2>Admin Login</h2>

    <?php if(isset($error)) echo "<p style='color:yellow;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

<!-- Footer -->
<footer style="position:fixed; bottom:10px; width:100%; text-align:center; color:white;">
    © <?php echo date("Y"); ?> Developed by <b>Vedant Wasalwar</b>
</footer>

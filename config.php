<?php
$conn = new mysqli(
    "sql307.infinityfree.com",   // MySQL Hostname
    "if0_41273611",              // MySQL Username
    "Vedant2026",                // MySQL Password
    "if0_41273611_smsdatabase",  // MySQL Database Name
    3306                         // MySQL Port
);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
?>

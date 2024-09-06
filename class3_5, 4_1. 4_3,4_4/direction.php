<?php
include "connect.php";
session_start();

$email = $_SESSION['email'];
$select = mysqli_query($connect, "SELECT * FROM `table1` WHERE `email` = '$email'");
$user = mysqli_fetch_assoc($select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo $user['email'] ?></h1>
    <p> <?php echo $user['password'] ?></p>
    <p> <?php echo $user['password'] ?></p>
    <p> <?php echo $user['password'] ?></p>
    <a href="index.php">Edit</a>
</body>
</html>
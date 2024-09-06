<?php
include "connect.php";
session_start();

$email = $_SESSION['email'];
$select = mysqli_query($connect, "SELECT * FROM `table1` WHERE `email` = '$email'");
$user = mysqli_fetch_assoc($select);

if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];

    

    if(empty($fname) && empty($lname) && empty($password)){
        echo "All Fiels Are Required!";
    }else{
      $update =mysqli_query($connect, " UPDATE `table1` SET `fname`='$fname',`lname`='$lname',`password`='$password'") ;
      header("location: direction.php");
    }
}




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="input1">
            <label for="">First Name</label>
            <input type="text" name="fname"  value=" <?php echo $user['fname'] ?>">
        </div>
        <div class="input">
            <label for="">Last Name</label>
        <input type="text" name="lname"  value=" <?php echo $user['lname'] ?>">
        </div>
       <div class="input3">
        <label for="">Password</label>
       <input type="password" name="password" value=" <?php echo $user['password'] ?>">
       </div>
       <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
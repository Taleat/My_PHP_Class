<?php

session_start();
include "database.php";
if(isset($_POST['submit'])){
    echo "clicked";
    $email = $_POST['email'];
    // $password = $_POST['password'];

    $select = mysqli_query($connect, "SELECT * FROM `table5` WHERE `email` = '$email'");
    $result = mysqli_num_rows($select);
    if(($result > 1)){
        // echo "This email already exist";
        $user = mysqli_fetch_assoc($select);
        $_SESSION['email'] = $user['email'];
        // $_SESSION['password'] = $user['password'];

        header("location: index.php");

    }else{
        echo "invalid details";
    }

}


?>vovo








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

        <div class="input input3">
        <input type="email" name="email" placeholder="Your Email">
        </div>

       <div class="btn">
       <button type="submit" name="submit">Update</button>
       </div>
    </form>
</body>
</html>
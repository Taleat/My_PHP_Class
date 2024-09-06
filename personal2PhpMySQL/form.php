<?php
include "connect.php";

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $age = $_POST['age'];

    if(empty($fname) && empty($lname) && empty($email) && empty($password) && empty($cpassword) && empty($age)){
        echo "All fields are required!";
    }else{
        $insert = mysqli_query($connect, "INSERT INTO `table1`(`fname`, `lname`, `email`, `password`, `cpassword`, `age`) VALUES ('$fname', '$lname', '$email', '$password', '$cpassword', '$age')");
        echo "this is successful";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="all-body">
        <div class="left">
            
        </div>
        <div class="right">
            <div class="head">
                <div class="regs">
                <h3>Sign Up</h3>
                <h4>Log In</h4>
                </div>
                <div class="head-icons">
                    😊😂🤣❤️
                </div>
            </div>
            <form action="" method="post">
               <div class="f-texts">
               <h1>Scholarship Application Form</h1>
                <p>Apply for a better future</p>
               </div>
                <div class="f-info">
                    <label for="">First Name</label>
                    <input type="text" name="fname">
                </div>
                <div class="f-info">
                    <label for="">Last Name</label>
                    <input type="text" name="lname">
                </div>
                <div class="f-info">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="f-info">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
                <div class="f-info">
                    <label for="">Confirm <br> Password</label>
                    <input type="password" name="cpassword">
                </div>
                <div class="f-info">
                    <label for="">Age</label>
                    <input type="number" name="age">
                </div>
                <div class="btn">
                <button type="submit" name="submit" class="button1">Submit</button>
                <button type="refresh" class="button2">Refresh</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
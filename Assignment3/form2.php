<?php
include "database.php";

$msg = "";
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    $event = $_POST['event'];

    if(empty($fname) && empty($email) && empty($image) && empty($event)){
        $msg = "Please fill all details";
    }else{
        $insert = mysqli_query($connect, "INSERT INTO `table4`(`fname`, `email`, `image`, `event`) VALUES ('$fname','$email','$image','$event')");
        move_uploaded_file($tmp_image, "photos/$image");
        header("location: read2.php");
    }
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            height:100vh;
            background: #786FAA;
            display: flex;
            justify-content: center;
        }
        .all{
            height: 87%;
            width: 82%;
            /* border: 1px solid black; */
            margin-top: 60px;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .side1{
            padding: 50px 0 0 0px;
            color: white;
            position: relative;

        }
        .side1 h1{
            font-size: 90px;
            padding-left: 30px;
            text-shadow: -3px 3px 5px rgba(0, 0, 0, 0.856) ;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .side1 img{
            position: absolute;
            top: 167px;
        }
        .side2{
            background: #EFF6F8;
            border-radius: 20px;
            padding: 30px;
        }
        .side2 h3{
            font-size: 20px;
            color: rgba(0, 0, 0, 0.842);
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        form{
            padding-top: 10px;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .input{
            margin-top: 20px;
        }
        label{
            font-weight: 300;
        }
        input{
            padding: 10px;
            height: 25px;
            width: 95%;
            border: 2px solid black;
            font-size: 17px;
            border-radius: 10px;
        }
        button{
            margin-top: 20px;
            padding: 10px;
            height: 50px;
            width: 100%;
            background: #786FAA;
            border-radius: 10px;
            font-size:18px;
            color:white;
        }
    </style>
</head>
<body>
    <div class="all">
        <div class="side1">
            <h1>Tech2Cash</h1>
            <h2>Unlocking new pathways to financial growth...</h2>
            <img src="./photos/tech2cash-img.png" alt="" width="80%">
        </div>
        <div class="side2">
            <h3>Tell us a little about you <br> to get started</h3>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="">Full name</label><br>
                    <input type="text" name="fname" placeholder="Fullname">
                </div>
                <div class="input">
                    <label for="">Email</label><br>
                    <input type="email" name="email" placeholder="Email@gmail.com">
                </div>
                <div class="input">
                    <label for="">Profile Image</label><br>
                    <input type="file" name="image" placeholder="Email@gmail.com">
                </div>
                <div class="input">
                    <label for="">How will you be attending the event?</label><br>
                    <input type="text" name="event" placeholder="">
                </div>
                <button type="submit" name="submit">Done, i will be there</button>
            </form>
        </div>
    </div>
</body>
</html>
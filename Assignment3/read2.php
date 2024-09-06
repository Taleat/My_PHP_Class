<?php
session_start();
include "database.php";

$select = mysqli_query($connect, "SELECT * FROM `table4` WHERE `email` = '$email'");
// $select2 = mysqli_query($connect,"SELECT `fname`, `email`, `image`, `event` FROM `table4`");
$result = mysqli_fetch_assoc($select);
$email = $_SESSION['email'];
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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background:black;
        }
        .background{
            height: 590px;
            width: 400px;
            background: #786FAA;
            display: flex;
            flex-direction: column;
            /* display: grid; */
            /* grid-template-rows: 1.8fr 2.5fr 2.5fr; */

            border-radius: 10px;
        }
       .u-logo{
            position: absolute;
            top: 30px;
            right: 40px;
            /* width: 200px;
            height: 20px; */
            /* border: 1px solid #000; */
        }
        .u-logo img{
            width: 130px;
            /* height: 20px; */
            /* object-fit: center; */
        } 
        .u-texts{
            font-family: Arial, Helvetica, sans-serif;
            height: 110px;
            position: relative;
            /* border: 1px solid black; */
        }
        .u-texts h1{
            position: absolute;
            bottom: 0;
            padding-left: 30px;
            color: white;
            font-size: 35px;
            padding-bottom: 5px;
        }
        .img-container{
            font-family: Arial, Helvetica, sans-serif;
            /* border: 2px solid black; */
            height: 100%;
            height: 330px;
            width: 100%;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            
        }
        .img{
            height: 90%;
            width: 80%;
            border:3px solid black;
            border-radius: 10px;
            position: relative;
        }
        img{
            width: 100%;
            object-fit: cover;
            height: 100%;
            border-radius: 10px;
        }
        .img-texts{
            width: 100px;
            height: 150px;
            position: absolute;
            right: 0;
            top: 0;
            /* background: rgba(2, 63, 40, 0.918); */
            background: #9A9D9E;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .img-texts2{
            position: absolute;
            bottom: 0;
            left: 20px;
            font-size: 23px;
            color: white;
        }
        .img-texts2 h1{
            text-shadow:-5px 2px #E487BC;
        }
        .d-texts{
            margin: 20px;
            height: 130px;
            /* border:1px solid black; */
            padding: 0 30px;
            color:white;
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
        }
        .d-texts p{
            font-size: 18px;
        }
        button{
            height: 50px;
            width: 330px;
            border-radius: 10px;
            background: #E487BC;
            color: white;
            border: none;
            margin-top: 20px;
        }
        a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="background">
        <div class="u-texts">
            <div class="u-logo">
                <img src="./photos/buggybillion-img.png" alt="" width="100%">
            </div>
            <h1>Tech2Cash</h1>
            <!-- <php echo $result['fname'] ?> -->
        </div>
        <div class="img-container">
            <div class="img">
                <img src="photos/<?php echo $result['image'] ?>" alt="">
                <div class="img-texts">
                    <h2 style="line-height: 40px;"><i>I will <br>be<br>there</i></h2>
                </div>
                <div class="img-texts2">
                    <h1><?php echo $result['fname'] ?></h1>
                </div>
            </div>
        </div>
        <div class="d-texts">
            <p>I just registered for "Tech2Cash" event! see you there</p>
            <button><a href="https://www.buggybillions.com/tech2cash">www.buggybillions.com/tech2cash</a></button>
        </div>
    </div>
</body>

</html>
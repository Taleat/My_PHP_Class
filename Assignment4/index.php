<?php
include "database.php";
session_start();

$email = $_SESSION['email'];
$select = mysqli_query($connect, "SELECT * FROM `table5` WHERE `email` = '$email'");
$user = mysqli_fetch_assoc($select);
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
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card{
            height: 300px;
            width: 700px;
            /* border: 1px solid #000; */
            /* box-shavscode-file://vscode-app/c:/Users/HP/AppData/Local/Programs/Microsoft%20VS%20Code/resources/app/out/vs/code/electron-sandbox/workbench/workbench.htmldow: 2px 2px 5px 1px rgba(0, 0, 255, 0.726); */
            display: grid;
            grid-template-columns: 1fr 2fr;
            
            border-top-right-radius: 25px;
        }
        .img-card{
            padding: 30px 15px;
            background-color: rgba(0, 128, 0, 0.39);
            border-top-left-radius: 25px;
        }
        .img-card img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .text-card{
            background-color: blue;
            border-top-right-radius: 25px;
            color: white;
            padding: 30px 15px;
            /* line-height: 0.8; */
        }
        .t-top, .t-btm{
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        .line{
            width: 100%;
            height: 3px;
            background-color: white;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="img-card">
            <img src="./images/<?php echo $user['image'] ?>" alt="">
        </div>
        <div class="text-card">
            <div class="t-top">
               <div class="pos">
                <h2><?php echo $user['name'] ?></h2>
                <p><?php echo $user['position'] ?></p>
               </div>
               <div class="logo">

               </div>
            </div>
            <div class="line"></div>
            <div class="t-btm">
                <div class="contact">
                    <h4>Contact</h4>
                    <p>234 556 5555 office</p>
                    <p><?php echo $user['mobile'] ?> mobile</p><br>
                    <!-- <p>234 556 5555 fax</p> -->
                    <p><?php echo $user['email'] ?></p>
                    <p>www.yourcompany.com</p>
                </div>
                <div class="company">
                    <h4>Company Name</h4>
                    <p>4555 West First Street Middletown, Michigan 45555</p><br> 
                    <h4>Find Me Online:</h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
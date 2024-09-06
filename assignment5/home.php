<?php

include "process.php";
session_start();

if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $matric = $_POST['matric'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $level = $_POST['level'];
  $image = $_FILES['image']['name'];
  $tmp_image = $_FILES['image']['tmp_name'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if(empty($fname) && empty($matric) && empty($email) && empty($age) && empty($level) && empty($image) && empty($password) && empty($cpassword)){
    echo "";
  }else{
    $email = $_POST['email'];
    $noRepeatEmail = mysqli_query($connect, "SELECT * FROM `assignment5` WHERE `email` = '$email'");
    $notrepeated = mysqli_num_rows($noRepeatEmail);
    if($notrepeated > 0){
      echo "email already exist";
    }elseif ($password != $cpassword) {
      echo "password doesnt match";
    }
    else{
      $insert = mysqli_query($connect, "INSERT INTO `assignment5`(`fname`, `matric`, `email`, `age`, `level`, `image`, `password`, `cpassword`) VALUES ('$fname','$matric','$email','$age','$level','$image','$password','$cpassword')");
      move_uploaded_file($tmp_image, "images/$image");
    //   header("location: dashboard.php");
    $matric = $_POST['matric'];
    $password = $_POST['password'];

    $select = mysqli_query($connect, "SELECT * FROM `assignment5` WHERE `matric` = '$matric' and `password` = '$password'");
    $result = mysqli_num_rows($select);
      if(($result > 0)){
        // echo "This matric already exist";
       $user = mysqli_fetch_assoc($select);
        $_SESSION['matric'] = $user['matric'];
        $_SESSION['password'] = $user['password'];

        header("location: dashboard2.php");

    }else{
        $msg = "invalid details";
    }
    }

  }
}




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="log.html" />
    <style>
      *{
        padding: 0;
        margin:0;
        outline:none;
      }
        .e-card{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
        }
      .card {
        display: none;
        display: grid;
        grid-template-columns: 1fr 1fr;
        height: 550px;
        width: 1000px;
        position: fixed;
      }
      .left,
      .right {
        padding: 50px 80px;
      }
      .left{
        /* background: #F9E0D1; */
        background: #60222F;
        color: white;
      }
      .left-img{
        width: 100%;
        height: 250px;
        /* border: 1px solid #000; */
      }
      .left-img img{
        object-fit: cover;
        width: 100%;
        height: 100%;
      }
      .right h5{
        margin-bottom: 30px;
      }
      .btn-mails{
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin: 15px 0;
      }
      .btn1, .btn2{
        background: white;
        border: 1px solid black;
        /* border-radius: 5px; */
        padding: 10px 20px;
      }
     .e-card form{
        display: flex;
        flex-direction: column;
        gap: 10px;
        position: relative;
    
    }
   .e-card form input{
        padding: 10px 20px;
        border-radius:none;
    }
      .g-inputs{
            display: flex;
            gap: 20px;
        }
        .g-inputs input{
            padding: 10px 10px;
        }
        .g-inputs select{
            padding: 10px 10px;
            width:225px;
            /* margin-right:50px; */
        }
        .g-inputs select option{
          border-radius: none;
        }
        .g-inputs .file-img{
          border: 1px solid grey;
          width:225px;
        }
        .submit{
          position: absolute;
          left:35%;
          bottom:-60px;
          background: white;
          border:none;
        padding: 10px 5px;
        width:150px;
        background: #60222F;
        color: #ffff;
        }
    </style>
  </head>
  <body>
 
    <div class="e-card">
        <div class="card" id="logForm">
            <div class="left">
              <h1>Success starts here</h1>
              <h5>✔️ Over 700 categorires</h5>
              <h5>✔️ Quality work done faster</h5>
              <h5>✔️ Access to talentand business accros the globe</h5>
              <div class="left-img">
                  <img src="./images/Muslim_girl_dp-removebg-preview.png" alt="">
              </div>
            </div>
            <div class="right">
              <h2>Create a new account</h2>
              <h5>Already have an account? <a href="">Sign In</a></h5>
              <div class="btn-mails">
                <button class="btn2">Continue with email</button>
              </div>
              <p style="text-align: center;">OR</p>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="g-inputs">
                    <input type="text" name="fname" placeholder="Enter Your Full Name">
                    <input type="text" name="matric" placeholder="Enter Your Matric No">
                </div>
             <div class="g-inputs">
             <input type="email" name="email" placeholder="Enter Email">
                <input type="text" name="age" placeholder="Enter Your Age">
             </div>
             <div class="g-inputs">
             <!-- <input type="text" name="level"> -->
             <select name="level" id="">
              <option value="">SELECT LEVEL</option>
              <option value="">100L</option>
              <option value="">200L</option>
              <option value="">300L</option>
              <option value="">400L</option>
              <option value="">500L</option>
             </select>
            <div class="file-img">
            <input type="file" name="image" style="width:200px; font-size:13px;">
            </div>
             </div>
               <div class="g-inputs">
                <input type="password" name="password" placeholder="">
                <input type="password" name="cpassword" placeholder="">
               </div>
               <a href="dashboard.php">  <button type="submit" name="submit" class="submit"> Continue</button></a>

              </form>
            </div>
          </div>
    </div>
  
  </body>
</html>

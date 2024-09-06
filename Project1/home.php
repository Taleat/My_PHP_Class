<?php

include "process.php";

if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if(empty($fname) && empty($lname) && empty($username) && empty($email) && empty($password) && empty($cpassword)){
    echo "";
  }else{
    $email = $_POST['email'];
    $noRepeatEmail = mysqli_query($connect, "SELECT * FROM `project1` WHERE `email` = '$email'");
    $notrepeated = mysqli_num_rows($noRepeatEmail);
    if($notrepeated > 0){
      echo "email already exist";
    }elseif ($password != $cpassword) {
      echo "password doesnt match";
    }
    else{
      $insert = mysqli_query($connect, "INSERT INTO `project1`(`fname`, `lname`, `username`, `email`, `password`, `cpassword`) VALUES ('$fname','$lname','$username','$email','$password','$cpassword')");
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
        .e-card{
            height: 100vh;
            width: 100%;
            position: absolute;
            top: 30px;
            left: 170px;
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
        border-radius: 5px;
        padding: 10px 20px;
      }
     .e-card form{
        display: flex;
        flex-direction: column;
        gap: 10px;
    
    }
   .e-card form input{
        padding: 10px 20px;
    }
      .g-inputs{
            display: flex;
            gap: 20px;
        }
        .g-inputs input{
            padding: 10px 10    px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="height: 80px">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mx-4 mb-lg-0 gap-4">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Disabled</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Disabled</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Disabled</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Disabled</a>
            </li>
          </ul>
          <form class="d-flex gap-3" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="btn btn-outline-success" id="logIn">Log In</button>
            <button class="btn btn-outline-success">Sign Up</button>
          </form>
        </div>
      </div>
    </nav>
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
                <button class="btn1">Continue with Google</button>
                <button class="btn2">Continue with email</button>
              </div>
              <p style="text-align: center;">OR</p>
              <form action="" method="post">
                <div class="g-inputs">
                    <input type="text" name="fname">
                    <input type="text" name="lname">
                </div>
                <input type="text" name="username">
                <input type="email" name="email">
               <div class="g-inputs">
                <input type="password" name="password">
                <input type="password" name="cpassword">
               </div>
               <button type="submit" name="submit"></button>

              </form>
            </div>
          </div>
    </div>
  
    <!-- <p>lore</p> -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // e.preventDefault();
        var logIn = document.getElementById("logIn");
        var logForm = document.getElementById("logForm");

        logIn.addEventListener("click", function (event) {
          event.preventDefault();
          if (logForm.style.display == "none") {
            logForm.style.display = "block";
          } else {
            logForm.style.display = "none";
          }
        });
      });
    </script>
  </body>
</html>

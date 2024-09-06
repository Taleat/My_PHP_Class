<?php 
include "process.php";
session_start();

$matric = $_SESSION['matric'];
$password = $_SESSION['password'];
$select = mysqli_query($connect, "SELECT * FROM `assignment5`");
$select = mysqli_query($connect, "SELECT * FROM `assignment5`  WHERE `matric` = '$matric' and `password` = '$password'");
$result = mysqli_fetch_assoc($select);
 
$email = $_SESSION['password'];
$select = mysqli_query($connect, "SELECT * FROM `table1` WHERE `password` = '$password'");
$user = mysqli_fetch_assoc($select);

if(isset($_POST['update'])){
    $password = $_POST['password'];
    $npassword = $_POST['npassword'];
    $ncpassword = $_POST['ncpassword'];

    

    if(empty($npassword)  && empty($password) && empty($ncpassword)){
        echo "All Fiels Are Required!";
    }elseif($npassword != $ncpassword){
        echo "password must match!";
    }else{
      $update = mysqli_query($connect, " UPDATE `assignment5` SET `password`='$npassword' and `cpassword`='$ncpassword'") ;
    //   header("location: direction.php");
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .header {
            display: flex;
            gap: 10px;
            align-items: center;
            background: rgba(128, 0, 128, 0.473);
            padding: 5px 20px;
        }

        .header p {
            font-size: 19px;
        }

        .hero {
            display: flex;
        }

        .profile {
            height: 94.6vh;
            width: 250px;
            background: rgba(128, 0, 128, 0.151);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            box-shadow: 1px 10px rgb(165, 146, 146);
            /* position: fixed; */
        }

        .mini_line {
            width: 100%;
        }

        .profile-line {
            /* width: 100%; */
            height: 3px;
            background: rgb(165, 146, 146);
            /* margin-bottom: 20px; */
        }

        .mini-profile {
            height: 200px;
            width: 100%;
            /* border: 1px solid #000; */
            border-bottom: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }

        .img-bd {
            height: 160px;
            width: 160px;
            border-radius: 50%;
            border: 3px solid rgb(165, 146, 146);
        }

        .img-bd img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .mini-profile p {
            font-size: 18px;
        }

        .profile-list {
            /* margin-top: 10px; */
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .profile-list p,
        .settings h3 {
            font-size: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .settings h3 {
            display: block;

        }

        .profile-list p i,
        .settings h3 i {
            font-size: 15px;
        }

        .profile-list a {
            text-decoration: none;
            color: black;
        }

        .a {
            /* background: grey; */
            width: 100%;
            height: 35px;
            /* text-aligns:center; */
            display: flex;
            align-items: center;
        }

        .active {
            background: rgba(128, 0, 128, 0.473);
            color: white;
            font-size: 20px;
        }

        .settings h3 i {
            padding: 0 15px;
        }

        .settings {
            height: 30px;
            width: 100%;
            background: rgba(128, 0, 128, 0.473);
            text-align: center;
            padding: 5px 0;
        }

        .dashboard {
            height: 90%;
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .dashboard-img {
            height: 200px;
            width: 200px;
            margin-top: 30px;
            border-radius: 50%;
            /* border:2px solid #fff; */
        }

        .dashboard img {
            object-fit: cover;
            height: 200px;
            width: 200px;
            border-radius: 50%;
        }
        .cards{
            display:flex;
            width: 100%;
            justify-content:center;
            gap:30px;
        }
        .card1{
            width:300px;
        }
        #passwordForm {
            display: none;
            flex-direction: column;
            /* gap: 10px; */
            padding: 10px;
            font-family: Arial, sans-serif;
            /* border:2px solid black;  */
            width: 100%;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.068);
            height: 90%;
        }

        .passwordForm h3 {
            padding-bottom: 10px;
        }

        .passFormCard {
            /* border:1px solid black; */
            width: 400px;
            height: 300px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            box-shadow: 0 0 10px 2px rgb(165, 146, 146);
            padding: 40px 20px;

        }

        .passFormInput1 {
            width: 350px;
            /* border: 1px solid #000; */
        }

        .passFormInput1 label p {
            font-size: 18px;
        }

        .passFormCard input {
            background: rgba(0, 0, 0, 0.068);
            outline: none;
            /* border:1px solid black; */
            border: none;
            padding: 10px 0;
            width: 100%;

        }
        .update-btn{
            height:40px;
            width:150px;
            background: rgb(165, 146, 196);
            color:white;
            border:none;
        }
    </style>
</head>

<body>
    <div class="header">
        <h3>Ruby$Tech .</h3>
        <p>Student Portal</p>
    </div>
    <div class="hero">
        <div class="profile">
            <div class="mini_line">
                <div class="mini-profile">
                    <div class="img-bd">
                        <img src="images/ruby_tech_uni_logo-removebg-preview.png" alt="">
                    </div>
                    <h3>
                        <?php echo $result['fname']; ?>
                    </h3>
                    <p>Computer Science</p>
                </div>
                <div class="profile-line"></div>
            </div>
            <div class="profile-list">
                <div class="a links">
                    <a href="dashboard2.php">
                        <p><i class="fa-solid fa-gauge"></i> Dashboard</p>
                    </a>
                </div>
                <div class="a links" id="changePass">
                    <p><i class="fa-solid fa-key"></i>Change Password</p>
                </div>
                <div class="a links" id="showGrades">
                    <p><i class="fa-solid fa-chart-simple"></i></i>Grades</p>
                </div>
                <div class="a links" id="showCourse">
                    <p><i class="fa-solid fa-bars"></i>Course Registration</p>
                </div>
                <div class="a links" id="showResult">
                    <p><i class="fa-regular fa-calendar-days"></i>Check Result</p>
                </div>
                <div class="a links">
                    <p><i class="fa-solid fa-question"></i>FAQs</p>
                </div>
            </div>
            <div class="settings">
                <h3><i class="fa-solid fa-gear"></i>Settings</h3>
            </div>
        </div>
        <div class="about">
            <div class="about-head">
                <h1>Student Profile</h1>
                <div class="abt-head-pic">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-regular fa-bell"></i>
                    <div class="abt-head-pic-text">
                        <div class="img-bd">
                            <img src="images/<?php echo $result['image']; ?>" alt="">
                        </div>
                        <p>Student</p>
                    </div>
                </div>
            </div>
            <div class="passwordForm" id="passwordForm">
                <h3>UPDATE PASSWORD</h3>
                <form action="" class="passFormCard" method="post">
                    <div class="passFormInput1">
                        <label for="">
                            <p>Enter Old Password</p>
                        </label>
                        <input type="password" name="password" id="" Enter Old Password>
                    </div>
                    <div class="passFormInput1">
                        <label for="">
                            <p>Enter New Password</p>
                        </label>
                        <input type="password" name="npassword" id="" Enter New Password>
                    </div>
                    <div class="passFormInput1">
                        <label for="">
                            <p>Confirm New Password</p>
                        </label>
                        <input type="password" name="ncpassword" id="" Enter New Password>
                    </div>
                    <button type="submit" name="update" class="update-btn">Update</button>
                </form>
            </div>
            <div class="dashboard" id="cards">
                <div class="dashboard-img">
                    <img src="images/<?php echo $result['image']; ?>" alt="">
                </div>
                <div class="cards">
                    <div class="card1">
                        <div class="card-head">
                            <h3>Your Profile</h3>
                        </div>
                        <div class="card-text">
                            <h3>
                                <?php echo $result['fname']; ?>
                            </h3>
                            <p>DEPARTMENT: Computer Science</p>
                            <p>FACULTY: Computing and Informatics</p>
                        </div>

                    </div>
                    <div class="card1">
        <div class="card-head"><h3>Academic Information</h3></div>
        <div class="card-text">
                   <p>LEVEL: 400L</p>
                   <p>AGE: 18</p>
                    <p>MATRIC NO: <?php echo $result['matric']; ?></p> 
               </div>
    </div>  
    <div class="card1">
    <div class="card-head"><h3>Payments</h3></div>
    <div class="card-text">
               <h4>CSC - 2023/2024</h4>
               <p> <?php echo $result['level']; ?> | Tution and School Fees | Form</p>
               <p>20/03/2024</p>
               <button>Pay Here</button>
           </div>
        </div>
                </div>
            </div>
        </div>





        <script src="https://kit.fontawesome.com/dbc695aca8.js" crossorigin="anonymous"></script>
        <script>

        </script>
        <script src="dashboard.js"></script>

</body>

</html>
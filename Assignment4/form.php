<?php
include "database.php";
$msg = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $position = $_POST['position'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];
    if(empty($name) && empty($position) && empty($mobile) && empty($email) && empty($image)){
        $msg= "All fields are required!";
    }elseif(empty($name)){
        $msg = "This field is reqiured";
    }elseif(empty($position)){
        $msg = "This field is reqiured";
    }elseif(empty($mobile)){
        $msg = "This field is reqiured";
    }elseif(empty($email)){
        $msg = "This field is reqiured";
    }elseif(empty($image)){
        $msg = "This field is reqiured";
    }else{
        $insert = mysqli_query($connect, "INSERT INTO `table5`(`name`, `position`, `mobile`, `email`, `image`) VALUE ('$name', '$position', '$mobile', '$email', '$image')");
        move_uploaded_file($tmp_image, "images/$image");
        $msg = "Product is successfully added";
        $email = $_POST['email'];
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
    <form action="" method="post" enctype="multipart/form-data">
      <div class="input input1">
        <input type="text" name="name" placeholder="Your Name">
      </div>
      <div class="input input2">
        <input type="text" name="position" placeholder="Your Position">

      </div>
        <div class="input input3">
        <input type="text" name="mobile" placeholder="Your Mobile">
        </div>
        <div class="input input3">
        <input type="email" name="email" placeholder="Your Email">
        </div>
       <div class="input input4">
       <input type="file" name="image"></div>
       <div class="btn">
       <button type="submit" name="submit">Update</button>
       </div>
    </form>
</body>
</html>
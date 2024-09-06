<?php
session_start();
$msg = "";
include "process.php";
if(isset($_POST['submit'])){
    // echo "clicked";
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
    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="matric">
        <input type="password" name="password">
        <button type="submit" name="submit">Submit</button>
    </form>
   <p style="color:red;"> <?php echo $msg ?> </p>
</body>
</html>
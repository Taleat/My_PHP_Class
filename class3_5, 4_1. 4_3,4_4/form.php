<?php
// session is used to store the details of a particular user through out the web pagees
session_start();
include "connect.php";
if(isset($_POST['submit'])){
    // echo "clicked";
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($connect, "SELECT * FROM `table1` WHERE `email` = '$email' and `password` = '$password'");
    $result = mysqli_num_rows($select);
    if(($result > 0)){
        // echo "This email already exist";
        $user = mysqli_fetch_assoc($select);
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];

        header("location: direction.php");

    }else{
        // echo "invalid details";
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
            padding:0;
            margin:0;
        }
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh
        }
        form{
            border:1px solid black;
            padding: 30px;
            display:flex;
            flex-direction:column;
            gap:10px;
            width:300px;
        }
        input{
            width:200px;
            height:40px;
        }
        button{
            height:30px;
            width:100px;
            background: blue;
            color:white;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h3>User Details</h3>
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
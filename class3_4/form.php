<?php
include "connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $about = $_POST['about'];
    $image = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    if(empty($image) && empty($name) && empty($about)){
        echo "All fields are required!!";
    }else{
        $insert = mysqli_query($connect, "INSERT INTO `table3`(`image`, `name`, `about`) VALUES ('$image','$name','$about')");
        echo "Check your frame now";
        move_uploaded_file($tmp_image, "photos/$image");

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" id="">
        <input type="text" name="about" id="">
        <input type="file" name="image" id="">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
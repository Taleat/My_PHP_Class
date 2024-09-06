<?php
include "database.php";
$msg = "";

if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $pdetails = $_POST['pdetails'];
    $pprice = $_POST['pprice'];
    $pimage = $_FILES['pimage']['name'];
    $tmp_pimage = $_FILES['pimage']['tmp_name'];
    if(empty($pname) && empty($pdetails) && empty($pprice) && empty($pimage)){
        $msg= "All fields are required!";
    }elseif(empty($pname)){
        $msg = "This field is reqiured";
    }elseif(empty($pdetails)){
        $msg = "This field is reqiured";
    }elseif(empty($pprice)){
        $msg = "This field is reqiured";
    }elseif(empty($pimage)){
        $msg = "This field is reqiured";
    }else{
        $insert = mysqli_query($connect, "INSERT INTO `table2`(`pname`, `pdetails`, `pprice`, `pimage`) VALUE ('$pname', '$pdetails', '$pprice', '$pimage')");
        move_uploaded_file($tmp_pimage, "Photos/$pimage");
        $msg = "Product is successfully added";
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
        <input type="text" name="pname">

      </div>
      <div class="input input2">
        <input type="text" name="pdetails">

      </div>
        <div class="input input3">
        <input type="text" name="pprice">

        </div>
       <div class="input input4">
       <input type="file" name="pimage">
       <?php echo "<p style='color:red;'>$msg</p> "?>
       </div>
       <div class="btn">
       <button type="submit" name="submit">Update</button>
       </div>
    </form>
</body>
</html>
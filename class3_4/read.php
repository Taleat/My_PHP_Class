<?php
include "connect.php";

$select = mysqli_query($connect, "SELECT * FROM `table3`");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        display:flex;
        flex-wrap:wrap;
        justify-self: center;
    }
    .all{
        width: 350px;
        height: 450px;
        position: relative;
        /* border: 1px solid black; */
    }
    .img1{
        width: 350px;
        height: 450px;
        overflow: hidden;
    }
    .img2{
        position: absolute;
        top: 46px;
        left: 53px;
        width: 250px;
        height: 362px;
        object-fit: cover;
    }
    .info{
        /* height: 70px; */
        width: 250px;
        background-color: rgba(255, 217, 0, 0.651);
        position: absolute;
        bottom: 42px;
        left: 53px;
        text-align: center;
        /* display: flex;
        flex-direction: column; */
        /* gap: none; */
        /* align-items: center;
        justify-content:left; */
        /* border: 2px solid black; */
    }
</style>
<body>
    <?php
    while($result = mysqli_fetch_assoc($select)){
    ?>
    <div class="all">
        <img src="./photos/8f2ae3e5-409f-4b9c-9a25-c2af11b26279.jpg" alt="" class="img1">
        <img src="photos/<?php echo $result['image']?>" alt="" class="img2">
        <div class="info">
            <h3><?php echo $result['name']?></h3>
            <p><?php echo $result['about']?></p>
        </div>
    </div>
    <?php
    }
    ?>
</body>
</html>
<?php
include "database.php";

$select = mysqli_query($connect, "SELECT * FROM `table2`");



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="form.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            display:flex;
            flex-wrap:wrap;
            gap:50px;
            /* width: 200%; */
            padding: 0 100px;
        }
        .card{
            height:400px;
            width:250px;
            /* border:2px solid black; */
            /* box-shadow: 0 0 8px 5px grey; */
            border-radius:10px;
        }
        img{
            width:100%;
            height:250px;
        }
        .card-body{
            padding: 0 10px;
            display:grid;
            grid-template-rows: 0.5fr 1fr 1fr;


            /* border:1px solid black; */
            /* display:flex; */
            /* flex-direction:column; */
            /* align-items:center; */
            /* justify-content:center; */
        }
        .card-btm{
            display: flex;
            gap: 20px;
            /* align-items:center; */
        }
        button{
            height:30px;
            /* padding-bottom:10px !important; */
            width:100px;
            background: blue;
            border:none !important;
            border-radius:5px;
            color: white;
        }
    </style>
</head>
<body>
    
<?php
while($result = mysqli_fetch_assoc($select)){

?>

<div class="card shadow">
  <img src="Photos/<?php echo $result['pimage'] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title" style="font-weight:bold;"><?php echo $result['pname'] ?></h5>
    <p class="card-text"><?php echo $result['pdetails'] ?></p>
   <div class="card-btm">
   <p class="card-text" style="color:red; font-weight:bold;"><?php echo $result['pprice'] ?></p>
    <button href="#" class="">Order Now</button>
   </div>
  </div>
</div>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->

<?php
}
?>
</body>
</html>
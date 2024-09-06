<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    display: flex;
    flex-direction:column;
    justify-content: space-around;
    align-items: center;
    height: 100vh;
    background:gainsboro;
}
form{
    height: 550px;
    width: 350px;
    border: 2px solid black;    
    /* border-radius: 10px; */
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: start;
    padding-left:30px;
    background:white;
}
input{
    padding:5px 50px
}
input:hover{
    border: 1px solid blue;
    outline: 1px solid blue;
    border-radius: 5px;
    padding:10px 10px
}
button{
    background: linear-gradient(to right, rgba(0, 0, 255, 0.842),rgba(0, 0, 255, 0.642));
    color:white;
    padding: 10px 30px;
    border:none;
    border-radius:10px;
}
.btn{
    display: flex;
    justify-content: space-around;
    align-items: center;
    width:80%;
    /* border:2px solid black */
}
.all-sides{
    display:grid;
    grid-template-columns: 1fr 1fr;
    width:100%
    border:2px solid black;
    border-radius:20px;
}
.side2{
    border:2px solid black;
    background:linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(./images/IMG-20240620-WA0080.jpg);
}
    </style>
</head>
<body>
<?php
$message = isset($_GET['msg'])? $_GET['msg'] : null;
// echo "true"
?>
<h1>Let Us Know You</h1>
<div class="all-sides">
<div class="side side1">
<form action="storage.php" method="post">
   <div class="input1">
   <label for="">First Name</label><br>
    <input type="text" name="" id="">
   </div>
   <div class="input2">
   <label for="">Last Name</label><br>
    <input type="text" name="" id="">
   </div>
  <div class="input3">
  <label for="">Username</label><br>
    <input type="text" name="" id="">
  </div>
<div class="input4">
<label for="">Gender</label><br>
   <div class="input-4-1" style="display:flex; gap:10px;" >
   <h5><input type="radio" name="gender" id="">MALE</h5>
    <h5><input type="radio" name="gender" id="">FEMALE</h5>
   </div>
</div>
  <div class="input5">
  <label for="">Enter Password</label><br>
    <input type="password" name="pass1" id="">
    <?php echo"<p style='color:red;'>" . htmlspecialchars($message) . "</p>"; ?>
  </div>
<div class="input6">
<label for="">Confirm Password</label><br>
    <input type="password" name="pass2" id="">
    <?php echo"<p style='color:red;'>" . htmlspecialchars($message) . "</p>"; ?>
</div>
<div class="btn">
<button type="submit">Busola</button>
</div>
</form>
</div>

<div class="side side2">
<!-- <img src="/images/d.jpg" alt=""> -->
</div>
</div>

</body>
</html>
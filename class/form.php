<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height:95vh;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        
        form{
            width:380px;
            height: 500px;
            border: 2px solid black;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            border-radius: 20px;
            background:rgba(128, 128, 128, 0.541);; 

            box-shadow: 4px 4px 10px 2px black;
            color: black;
        }
        form label{
            font-size: 21px;
        }
        input{
            padding:5px 10px;
            width:280px;
            height:30px;
        }
        button{
            background: white;
            color: black;
            border:2px solid black;
            border-radius: 20px;
            height:35px;
            width:150px;
        }
        button:hover{
            background: black;
            color: white;
        }
        p input{
            padding:none;
            width:10px;
            height:10px;
        }
    </style>
</head>
<body>
    <?php
  $condition = isset($_GET['msg'])? $_GET['msg'] : null;
//  echo $condition;
// echo "<p style='color: red;'>$condition</p>";
?>


<form action="storage.php" method="post">
    <h3>Ruby's Form</h3>
    <div class="one">
    <label for="">Username:</label><br>
    <input type="text" name="fname" placeholder="abcdef">
    <span class="error-message"><?php echo "<p style='color: red; font-size:10px;'>$condition</p>"; ?></span>
<br> 
    </div>
    <div class="two">
    <label for="">Email:</label><br>
    <input type="email" name="email" placeholder="abc@gmail.com">
    <span class="error-message"><?php echo "<p style='color: red; font-size:10px;'>$condition</p>"; ?></span>
    <br>
    </div>
   <div class="three">
   <label for="">Password:</label><br>
    <input type="password" name="password">
    <span class="error-message"><?php echo "<p style='color: red; font-size:10px;'>$condition</p>"; ?></span>
    <br>
   </div>
  <div class="four">
  <button type="submit">Submit.</button> <br>
  <p> <input type="checkbox" name="" id=""> by clck this i concent to blablabla</p>
  </div>
</form>    



</body>
</html>
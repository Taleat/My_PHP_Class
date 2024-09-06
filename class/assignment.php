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
            background-image: url(/images/d.jpg);
            width:100%;
        }

        /* img{
            width:400px;
            height:400px:
        } */
        
        form{
            width:380px;
            height: 480px;
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

<form action="storage.php" method="post">
    <h3>Ruby's Form</h3>
    <div class="one">
    <label for="">Username:</label><br>
    <input type="text" name="fname" placeholder="abcdef"><br> <br>
    </div>
    <div class="two">
    <label for="">Email:</label><br>
    <input type="email" name="email" placeholder="abc@gmail.com"> <br> <br>
    </div>
    <!-- <img src="/images/d.jpg" alt=""> -->
    <div class="five">
    <label for="">Phone No:</label><br>
    <input type="text" name="phone" placeholder="abc@gmail.com"> <br> <br>
    </div>
   <div class="three">
   <label for="">Password:</label><br>
    <input type="password" name="password"> <br> <br>
   </div>
  <div class="four">
  <button type="submit">Submit.</button> <br>
  <p> <input type="checkbox" name="" id=""> by clck this i concent to blablabla</p>
  </div>
</form>    



</body>
</html>
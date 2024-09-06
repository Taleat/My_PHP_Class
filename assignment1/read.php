<?php
include "connect.php";

$select = mysqli_query($con, "SELECT * FROM `table2`");

if(isset($_GET['delete'])){
    $country = $_GET["delete"];
    $delete = mysqli_query($con, "DELETE FROM `table2` WHERE `country` = '$country'");
    if($delete){
        header("location: read.php");
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
    <table border>

    <thead>
        <tr>
            <th>S/N</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>age</th>
            <th>country</th>
            <th>pictures</th>
        </tr>
    </thead>
    <?php
while($result = mysqli_fetch_assoc($select)){
?>
    <tbody>
    <tr>
            <td>
                <?php 
                echo $result['id']
                ?>
            </td>
            <td>
            <?php 
                echo $result['fname']
                ?>
            </td>
            <td>
                <?php 
                echo $result['gender']
                ?>
            </td>
            <td>
            <?php 
                echo $result['age']
                ?>
            </td>
            <td>
            <?php 
                echo $result['country']
                ?>
            </td>
            <td>
                 <img src="upload/<?php echo $result['picture']?>" alt="" width="200px"> 
            </td>
            <td>
                <a href="read.php?delete=<?php echo $result['country'];?>"><button type="submit" name="delete">Delete</button></a>
            </td>
        </tr>
    </tbody>
    <?php
}
    ?>
        
    </table>
</body>
</html>
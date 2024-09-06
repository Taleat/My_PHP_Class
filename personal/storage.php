<?php
if($_POST['pass1'] != $_POST['pass2']){
    header("location: form.php?msg=password not match!");
    exit();
    
}














?>
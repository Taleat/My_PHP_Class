<?php
// print_r ($_POST);
// if(empty($_POST['fname'])){
//     header("location: form.php");
// }elseif(empty($_POST['email'])){
//     header("location: form.php");
// }elseif(empty($_POST['password'])){
//     header("location: form.php");
// }else{
//     print_r($_POST);
// }
if(empty($_POST['fname'] && $_POST['email'] && $_POST['password'])){
    header("location: form.php?msg=password now correct");
}else{
    print_r($_POST);
}
echo "<br>";
foreach($_POST as $key => $value){
    echo "$key => $value";
    echo "<br>";
}

?>
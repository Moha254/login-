<?php 
if(isset($_POST["SUBMIT"])){
    $name=$_POST["name"];
    $username=$_POST["username"];

$data="name=".$name."&username=".$username;

if(empty($name)){
    $em="name is required";

    header("location: index.php?error=$em & $data");
}
else if(empty($username)){
    $em="username is required";
    
    header("location: index.php?error=$em & $data");
}
else{
    echo "good!";
}
}
else{
    $em="invalid request";
    
    header("location: index.php?error=$em");
}


?>
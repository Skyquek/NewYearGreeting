<?php

$users = array(
    array("Quek", "1", "Quek_gift.jpg"),
    array("Reaper", "1", "Reaper_gift.jpg"),    
    array("Tang", "1", "Tang_gift.jpg")
);

session_start();
echo 'in';

if(isset($_POST['login'])){
        
    $userName = $_POST['userName'];
    $password = $_POST['password'];
        
    foreach($users as $user){
        
        if($user[0] == $userName and $user[1] == $password){
            $_SESSION['userName'] = $userName;
            $_SESSION['path'] = $user[2];
            header("location:index.php");
            die;
        }
            
    }
    header("location:login.php?info=1");
}

elseif(!isset($_SESSION['userName'])){
    header("location:login.php?info=2");
}

elseif(isset($_POST['logout'])){
    session_destroy();
}

?>
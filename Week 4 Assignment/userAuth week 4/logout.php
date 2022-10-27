<?php
function logout(){
    SESSION_start();
    if ($_SESSION){
        SESSION_destroy();
        header("Location:./index.php");
        exit(); 
    }
    else{
        header("Location:./index.php? error = You are not Logged in");
        exit();
    }
}
Logout();
?>
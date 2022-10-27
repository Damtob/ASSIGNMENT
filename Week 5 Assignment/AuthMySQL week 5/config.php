<?php

function db() {
    //set your configs here
    $host = "localhost";
    $user = "root";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }else{
        echo "connected successfull";
    }
   return $conn;

}

<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $password =  $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
   $file=fopen('../storage/users.csv', 'r');
   while(!feof($file)){
    $line = fgetcsv($file);
    if($line[1]==$email && $line[2]==$password){
        $_session['Username']=$line[0];
        header("Location:./dashboard.php");
        exit();
    }
   }
   echo "<h2 style='color:red'> invalid Username or Password</h2>";
   fclose($file);
}


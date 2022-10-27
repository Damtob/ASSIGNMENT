<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
$form_data=array(
'fullname'=> $username,
'email'=> $email,
'password'=> $password
);
if (checkUserExist($email)){
    echo "user already exist";
 }else{
    $file=fopen('./users.csv','a');
    fputcsv($file, $form_data);
    fclose($file);
    echo "User Registered Successfully";
 }
}
function checkUserExist($email){ 
 $file=fopen('./users.csv', 'r');
 while(!feof($file)){
    $line=fgetcsv($file);
    if($line[1] == $email){
        return true;
    }
 }
 return false;   
}
?>
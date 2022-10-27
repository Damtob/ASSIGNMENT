<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password']; 

    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    $file = fopen('./users.csv', 'r');
    while (!feof($file)){
        $line=fgetcsv($file);
        if ($line[1]== $email){
            $line[2]= $password;
            fclose($file);
            $file=fopen('./users.csv', 'w');
            fputcsv($file, $line);
            fclose($file);
            echo "password reset successfully";
            exit();
        }
    }
    echo "<h2 style='color: red> invalid username or password </h2>";
    fclose ($file);
}
?>


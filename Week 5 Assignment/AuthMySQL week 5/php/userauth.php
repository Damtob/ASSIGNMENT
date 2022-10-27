<?php

require_once "../config.php";

//register users
function registerUser($fullnames, $email, $password, $gender, $country){
    //create a connection variable using the db function in config.php
    $conn = db();
   //check if user with this email already exist in the database
    $sql = "SELECT * FROM students WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            $message = "User aleady exist, please login";
            echo "<script>
            alert('$message');
            window.location.href='../forms/register.html';
            </script>";
            exit;  
        }else{
            //if the email does not exist in the database store all the data in the database as a new user
            $sql = "INSERT INTO students (full_names, email, gender, country, password) VALUES ('$fullnames', '$email', '$gender', '$country', '$password')";

            $result = mysqli_query($conn, $sql);

            if($result){
                $message = "Registration successful please login";
                echo "<script>
                alert('$message');
                window.location.href='../forms/login.html';
                </script>";
                exit;
            }else{
                echo "fail";
            }

        }
    }
}


//login users
function loginUser($email, $password){
    //create a connection variable using the db function in config.php
    $conn = db();

    //echo "<h1 style='color: red'> LOG ME IN (IMPLEMENT ME) </h1>";
    //open connection to the database and check if username exist in the database
    //if it does, check if the password is the same with what is given

    $sql = "SELECT * FROM students WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){
            //if true then set user session for the user and redirect to the dasbboard

            session_start();
            $_SESSION['email'] = $email;

            $message = "Login successful";
            echo "<script>
            alert('$message');
            window.location.href='../dashboard.php';
            </script>";
            exit;  


        }else{
            $message = "Invalid details please try again";
            echo "<script>
            alert('$message');
            window.location.href='../forms/login.html';
            </script>";
            exit; 
        }
    }


}


function resetPassword($email, $password){
    //create a connection variable using the db function in config.php
    $conn = db();
    echo "<h1 style='color: red'>RESET YOUR PASSWORD (IMPLEMENT ME)</h1>";
    //open connection to the database and check if username exist in the database
    //if it does, replace the password with $password given
}

function getusers(){
    $conn = db();
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);
    echo"<html>
    <head></head>
    <body>
    <center><h1><u> ZURI PHP STUDENTS </u> </h1> 
    <table border='1' style='width: 700px; background-color: magenta; border-style: none'; >
    <tr style='height: 40px'><th>ID</th><th>Full Names</th> <th>Email</th> <th>Gender</th> <th>Country</th> <th>Action</th></tr>";
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            //show data
            echo "<tr style='height: 30px'>".
                "<td style='width: 50px; background: blue'>" . $data['id'] . "</td>
                <td style='width: 150px'>" . $data['full_names'] .
                "</td> <td style='width: 150px'>" . $data['email'] .
                "</td> <td style='width: 150px'>" . $data['gender'] . 
                "</td> <td style='width: 150px'>" . $data['country'] . 
                "</td>
                <form action='action.php' method='post'>
                <input type='hidden' name='id'" .
                 "value=" . $data['id'] . ">".
                "<td style='width: 150px'> <button type='submit', name='delete'> DELETE </button>".
                "</tr>";
        }
        echo "</table></table></center></body></html>";
    }
    //return users from the database
    //loop through the users and display them on a table
}

 function deleteaccount($id){
     $conn = db();
     //delete user with the given id from the database
 }


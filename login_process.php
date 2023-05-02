<?php
include "connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

$result = $conn->query("SELECT * FROM management WHERE email='$email' AND  password='$password'");

if(!$result){
    echo "Error: " . $conn->error;
}else{
    header('Location: read.php');
    exit();
}

if($result->num_rows>0){
    session_start();
    $_SESSION['email'] = $email;
     header('Location:read.php');
     exit();
}else{
    echo 'Invalid email or password';
}
}
?>
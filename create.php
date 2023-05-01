<?php

include 'connection.php';

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $sql = "INSERT INTO management(id, firstname, lastname, email, password) VALUES('', '$firstname','$lastname','$email','$password');";
    $result = $conn -> query($sql); 

    if($result == true){
        header('Location: read.php');
    }else{
        echo 'Error:'.$sql.'<br>'.$conn->error;
    }

    $conn->close();
   
}
?>




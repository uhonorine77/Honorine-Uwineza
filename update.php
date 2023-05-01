<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password = sha1($_POST['password']);
    // $sql = "UPDATE management SET firstname="'.$firstname.'",lastname="'.$lastname.'",email="'.$email.'",password="'.$password.'" WHERE lastname="'.$lastname.'";";
    $sql='UPDATE management SET firstname="'.$firstname.'",lastname="'.$lastname.'",email="'.$email.'",password="'.$password.'." WHERE lastname="'.$lastname.'";';
    $result = $conn->query($sql);

    if ($result === true) {
        echo "User updated successfully";
        header('Location: read.php');
    } else {
        echo "Error updating user: " . $conn->error;
    }

    $conn->close();
}
?>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'UserManagementSystem';

$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    echo 'connection failed!!!';
}
?>
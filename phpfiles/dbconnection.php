<?php
$host='localhost:3306';
$root='root';
$password='';
$database='GymCommunity';
$conn=new mysqli($host,$root,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}




?>
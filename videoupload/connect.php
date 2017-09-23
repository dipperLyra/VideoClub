<?php
$servername="localhost";
$username="franc";
$password = "come1234";
$dbname="videoupload";

//create connection
$conn= new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("connection failed:" . $conn->connect_error);
};

echo "connected successfully";
 ?>
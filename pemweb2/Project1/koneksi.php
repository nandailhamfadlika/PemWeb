<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "dbpuskesmas";


$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){
    die("Connection Failed: ". $conn->connect_error);
}

?>
<?php

include 'koneksi.php';

$merk = $_POST['merk'];
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$rom = $_POST['rom'];

$query = "INSERT INTO laptop (merk, processor, ram, rom)
          VALUES ('$merk', '$processor', '$ram', '$rom') ";

if($conn->query($query) === TRUE ){
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>
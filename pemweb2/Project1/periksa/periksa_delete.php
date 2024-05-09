<?php
require_once "../koneksi.php";
$_periksa_id = $_GET['periksa_id'];

$sql = "DELETE FROM periksa WHERE periksa_id = '$_periksa_id'";
if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header('Location: data_periksa.php');
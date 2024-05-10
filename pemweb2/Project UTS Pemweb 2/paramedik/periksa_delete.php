<?php
require_once "../koneksi.php";
$_paramedik_id = $_GET['paramedik_id'];

$sql = "DELETE FROM paramedik WHERE paramedik_id = '$_paramedik_id'";
if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header('Location: data_paramedik.php');
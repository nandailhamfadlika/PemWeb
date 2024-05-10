<?php
require_once "../koneksi.php";
$_pasien_id = $_GET['pasien_id'];

$sql = "DELETE FROM pasien WHERE pasien_id = '$_pasien_id'";
if ($conn->query($sql) === TRUE) {
    echo "record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header('Location: data_pasien.php');
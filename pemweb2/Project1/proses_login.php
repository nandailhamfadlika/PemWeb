<?php
// tangkap input login
$email = $_POST['email'];
$password = md5($_POST['password']);

$credential = [$email, $password];

include_once ('koneksi.php');

// query login
$query = "SELECT * FROM users WHERE email = ? AND password = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $password); // "ss" menandakan dua string (jenis data parameter)
$stmt->execute($credential);
$result = $stmt->get_result()->fetch_assoc(); // Ambil baris hasil sebagai asosiatif array

// validasi login
if ($result) {
    session_start();
    $_SESSION['nama'] = $result['nama'];
    $_SESSION['email'] = $result['email'];
    header('Location: dashboard/dashboard.php');
} else {
    header('Location: Index.html');
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
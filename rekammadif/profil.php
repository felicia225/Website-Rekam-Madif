<?php
require 'conn.php';

$nama = $_POST['nama'];
$status = $_POST['status'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$wa = $_POST['wa'];

$query_sql = "INSERT INTO profil (nama, status, nik, email, wa) VALUES ('$nama','$status', '$nik', '$email', '$wa')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: dashboard.html");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
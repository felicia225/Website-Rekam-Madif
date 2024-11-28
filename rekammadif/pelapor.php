<?php
require 'conn.php';

$pelapor = $_POST['pelapor'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$instansi = $_POST['instansi'];
$wa = $_POST['wa'];
$email = $_POST['email'];

$query_sql = "INSERT INTO pelapor (pelapor, nama, nik, instansi, wa, email) VALUES ('$pelapor', '$nama', '$nik', '$instansi', '$wa', '$email')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: terlapor.html");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
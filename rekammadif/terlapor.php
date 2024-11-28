<?php
require 'conn.php';

$nama = $_POST['nama'];
$gender = $_POST['gender'];
$nik = $_POST['nik'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$fakultas = $_POST['fakultas'];
$program = $_POST['program'];
$wa = $_POST['wa'];
$email = $_POST['email'];

$query_sql = "INSERT INTO terlapor (nama, gender, nik, tempat, tanggal, fakultas, program, wa, email) VALUES ('$nama','$gender', '$nik', '$tempat', '$tanggal', '$fakultas', '$program', '$wa', '$email')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: identifikasi.html ");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
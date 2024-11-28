<?php
require 'conn.php';

$fisik = $_POST['fisik'];
$penampilan = $_POST['penampilan'];
$ekspresi = $_POST['ekspresi'];
$perasaan = $_POST['perasaan'];
$tingkah = $_POST['tingkah'];
$umum = $_POST['umum'];
$intelektual = $_POST['intelektual'];
$lain = $_POST['lain'];
$masalah = $_POST['masalah'];
$indikasiawal = $_POST['indikasiawal'];
$kategorimasalah = $_POST['kategorimasalah'];
$klasifikasi = $_POST['klasifikasi'];
$penanganan = $_POST['penanganan'];

$query_sql = "INSERT INTO identifikasi (fisik, penampilan, ekspresi, perasaan, tingkah, umum, intelektual, lain, masalah, indikasiawal, kategorimasalah, klasifikasi, penanganan) VALUES ('$fisik','$penampilan', '$ekspresi', '$perasaan', '$tingkah', '$umum', '$intelektual', '$lain', '$masalah', '$indikasiawal', '$kategorimasalah', '$klasifikasi', '$penanganan')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: layanan.html ");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
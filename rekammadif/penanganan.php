<?php
require 'conn.php';

$nama = $_POST['nama'];
$wa = $_POST['wa'];
$komunikasi = $_POST['komunikasi'];
$kebiasaan = $_POST['kebiasaan'];
$hasil = $_POST['hasil'];

$query_sql = "INSERT INTO penanganan (nama, wa, komunikasi, kebiasaan, hasil) VALUES ('$nama', '$wa', '$komunikasi', '$kebiasaan', '$hasil')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: dashboard.html ");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
<?php
require 'conn.php';

$rujuk = $_POST['rujuk'];
$unit = $_POST['unit'];
$tujuan = $_POST['tujuan'];
$catatan = $_POST['catatan'];

$query_sql = "INSERT INTO rujuk (rujuk, unit, tujuan, catatan) VALUES ('$rujuk', '$unit', '$tujuan', '$catatan')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: penanganan.html ");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
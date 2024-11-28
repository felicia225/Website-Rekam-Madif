<?php
require 'conn.php';

$layanan = $_POST['layanan'];
$rincian = $_POST['rincian'];

$query_sql = "INSERT INTO layanan (layanan, rincian) VALUES ('$layanan', '$rincian')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: rujuk.html ");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
<?php
require 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "INSERT INTO login (username, password) VALUES ('$username','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: profile.html");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
<?php
require 'conn.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "INSERT INTO signin (username,email, password) VALUES ('$username', '$email','$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
    exit; 
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn);
}
?>
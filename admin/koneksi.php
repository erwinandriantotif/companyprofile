<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "company_profile";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (mysqli_connect_errno()) {
    echo "koneksi gagal : " . mysqli_connect_errno();
}

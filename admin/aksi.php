<?php
include "koneksi.php";
// menangkap data yang dikirim dari form input
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$ttl = $_POST['ttl'];
$posisi = $_POST['posisi'];
//input data ke database
$simpan = mysqli_query($koneksi, "INSERT INTO staff (nama, nip, jenis_kelamin, ttl, posisi) VALUES ('$nama','$nip','$jenis_kelamin','$ttl','$posisi')");
if ($simpan) {
    echo "<script>
    alert ('Data Tersimpan !');  
    // redirect ke halaman staff
    document.location= 'staff.php';
    </script>";
} else {
    echo "<script>
    alert ('Data Tidak Tersimpan !');  
    // redirect ke halaman staff
    document.location= 'staff.php';
    </script>";
}

// 
// header("location:staff.php");

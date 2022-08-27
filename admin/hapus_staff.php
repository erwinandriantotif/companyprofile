<?php
session_start();
// define a MariaDB connection
// variable exec executes SQL query
include "koneksi.php";
$hapus = $koneksi->query("DELETE FROM staff WHERE id = '$_GET[id]'");

// below 2-lines of javascript code is used to pop up a message "Staff Terhapus"
// then redirect user to page staff.php
echo "<script>alert('Data terhapus !');</script>";
echo "<script>location='staff.php';</script>";

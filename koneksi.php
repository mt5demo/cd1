<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_pendaftaran")
    or die("Koneksi ke database gagal: " . mysqli_connect_error());

-- Buat database
CREATE DATABASE db_pendaftaran;
USE db_pendaftaran;

-- Buat tabel siswa
CREATE TABLE siswa (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    alamat TEXT NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    kelas ENUM('RPL','TKJ','LP','TKR','TSM') NOT NULL,
    tanggal_daftar TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

<?php
// Ambil status notifikasi dari URL
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Form Pendaftaran Siswa Baru</h2>

    <!-- Notifikasi sukses / gagal -->
    <?php if ($status === 'sukses'): ?>
        <div class="alert-success">Pendaftaran berhasil disimpan!</div>
    <?php elseif ($status === 'gagal'): ?>
        <div class="alert-error">Pendaftaran gagal, silakan coba lagi.</div>
    <?php endif; ?>

    <!-- Form input data siswa -->
    <form action="proses_daftar.php" method="POST">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="contoh@email.com" required>

        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" placeholder="Masukkan alamat lengkap" required></textarea>

        <label for="no_hp">No. HP</label>
        <input type="text" id="no_hp" name="no_hp" placeholder="08xxxxxxxxxx" required>

        <!-- Pilihan kelas dibuat dengan perulangan -->
        <label for="kelas">Pilih Kelas</label>
        <select id="kelas" name="kelas" required>
            <option value="">-- Pilih Kelas --</option>
            <?php foreach (['RPL', 'TKJ', 'LP', 'TKR', 'TSM'] as $k): ?>
                <option value="<?= $k ?>"><?= $k ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Kirim</button>
    </form>

    <!-- Link navigasi -->
    <a class="nav-link" href="data_siswa.php">Lihat Data Siswa Terdaftar &raquo;</a><br>
    <a class="nav-link" href="perkalian.php">Buka Program Operasi Perkalian &raquo;</a>
</div>
</body>
</html>

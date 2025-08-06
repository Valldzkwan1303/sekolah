<?php
include 'config/koneksi.php';

$success = "";
$error = "";

// Proses kirim pesan jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = htmlspecialchars(trim($_POST["nama"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $pesan = htmlspecialchars(trim($_POST["pesan"]));

  if ($nama && $email && $pesan) {
    $query = "INSERT INTO pesan_kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    if (mysqli_query($conn, $query)) {
      $success = "Pesan berhasil dikirim!";
    } else {
      $error = "Gagal mengirim pesan.";
    }
  } else {
    $error = "Semua kolom wajib diisi!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kontak Kami</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>

<!-- Navbar -->
<header>
  <nav class="navbar">
    <div class="navbar-left">
      <img src="assets/img/logo.png" alt="Logo Sekolah" style="height: 50px; margin-right: 10px;">
      <span class="navbar-brand">SMK Negeri 64 Jakarta</span>
    </div>
    <ul class="navbar-menu">
      <li><a href="index.php">Beranda</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="berita.php" class="active">Berita</a></li>
      <li><a href="kontak.php">Kontak</a></li>
      <li><a href="admin/login.php">Admin</a></li>
      <?php if (isset($_SESSION['admin'])): ?>
        <li><a href="admin/dashboard_admin.php">Dashboard</a></li>
        <li><a href="admin/logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a></li>
      <?php endif; ?>
    </ul>
  </nav>
</header>

<!-- Main Konten -->
<main style="max-width: 1100px; margin: 40px auto; padding: 0 20px;">
  <h1 style="text-align: center; color: #002b5b;">Hubungi Kami</h1>
  <p style="text-align: center; margin-bottom: 30px;">Silakan kirim pesan melalui formulir berikut. Kami akan merespons secepatnya.</p>

  <!-- Notifikasi -->
  <?php if ($success): ?>
    <div style="text-align:center; color:green; margin-bottom: 15px;"><?= $success ?></div>
  <?php elseif ($error): ?>
    <div style="text-align:center; color:red; margin-bottom: 15px;"><?= $error ?></div>
  <?php endif; ?>

  <!-- Form Kontak -->
  <div style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
    <form method="POST" style="flex: 1 1 400px; background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
      <label for="nama">Nama</label><br>
      <input type="text" id="nama" name="nama" placeholder="Nama lengkap" required><br><br>

      <label for="email">Email</label><br>
      <input type="email" id="email" name="email" placeholder="Alamat email aktif" required><br><br>

      <label for="pesan">Pesan</label><br>
      <textarea id="pesan" name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea><br><br>

      <button type="submit">Kirim Pesan</button>
    </form>
  </div>
</main>

<!-- Footer -->
<footer class="footer" id="contact">
  <div class="box-container">

    <!-- Logo & Deskripsi -->
    <div class="mainBox">
      <div class="content">
        <a href="#"><img src="assets/img/logo.png" alt="Logo Sekolah" style="height: 60px;"></a>
        <h1 class="logoName">SMK Negeri 64 Jakarta</h1>
      </div>
      <p>SMK Negeri 64 berkomitmen mencetak lulusan siap kerja, berkarakter, dan berdaya saing global.</p>
    </div>

    <!-- Menu Utama -->
    <div class="box">
      <h3>Menu Utama</h3>
      <a href="index.php"><i class="fas fa-arrow-right"></i> Beranda</a>
      <a href="profil.php"><i class="fas fa-arrow-right"></i> Profil</a>
      <a href="berita.php"><i class="fas fa-arrow-right"></i> Berita</a>
      <a href="kontak.php"><i class="fas fa-arrow-right"></i> Kontak</a>
    </div>

    <!-- Informasi -->
    <div class="box">
      <h3>Informasi</h3>
      <a href="#"><i class="fas fa-arrow-right"></i> Program Keahlian</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Fasilitas</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Mitra Industri</a>
    </div>

    <!-- Kontak Kami -->
    <div class="box">
      <h3>Kontak Kami</h3>
      <a href="#"><i class="fas fa-phone"></i> (021) 12345678</a>
      <a href="#"><i class="fas fa-envelope"></i> info@smkn64.sch.id</a>
      <a href="#"><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 64, Kota Pintar</a>
    </div>
  </div>

  <!-- Lokasi Sekolah -->
  <div class="lokasi-maps">
    <h3 style="text-align:center;">Lokasi Sekolah</h3>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31696.139836534!2d107.6101166!3d-6.9148649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65e4e3c8873%3A0x301e8f1fc28b420!2sBandung!5e0!3m2!1sid!2sid!4v1590402000000!5m2!1sid!2sid" 
      width="100%" 
      height="200" 
      style="border: 0; border-radius: 8px;" 
      allowfullscreen 
      loading="lazy">
    </iframe>
  </div>

  <!-- Sosial Media -->
  <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-youtube"></a>
    <a href="#" class="fab fa-linkedin"></a>
  </div>

  <!-- Credit -->
  <div class="credit">
    Dibuat oleh <span>Tim IT SMK Negeri 64</span> | &copy; 2025 All Rights Reserved
  </div>
</footer>

</body>
</html>

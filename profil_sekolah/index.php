<?php
// Koneksi database
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda - SMK Negeri 64</title>
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

<!-- Main Content -->
<main>

  <!-- Banner -->
  <section class="hero" style="position: relative;">
    <img src="assets/img/sekolah.jpeg" alt="Banner Sekolah" style="width: 100%; max-height: 600px; object-fit: cover;">
    <div style="position: absolute; bottom: 40px; left: 40px; background-color: rgba(0,0,0,0.6); color: #fff; padding: 20px; border-radius: 10px; max-width: 700px;">
      <h1 style="margin: 0;">SMK Negeri 64</h1>
      <p style="margin-top: 10px;">
        SMK Negeri 64 adalah sekolah kejuruan modern yang berdiri sejak 2005. Kami memiliki visi mencetak generasi yang unggul, mandiri, dan mampu bersaing di era digital. Dengan fasilitas lengkap dan program keahlian unggulan, kami siap mengantarkan siswa menuju masa depan gemilang.
      </p>
    </div>
  </section>

  <!-- Sambutan Kepala Sekolah -->
  <section class="section-box sambutan">
    <img src="assets/img/kepala sekolah.jpeg" alt="Kepala Sekolah">
    <div>
      <h2>Sambutan Kepala Sekolah</h2>
      <p><strong>Dewi Puspitasari S.ST.Par, M.Par</strong></p>
      <p>SMK Negeri 64 merupakan Sekolah Menengah Kejuruan yang memiliki dua program keahlian unggulan:</p>
      <ul>
        <li><strong>Rekayasa Perangkat Lunak (RPL)</strong>: Fokus pada pengembangan perangkat lunak, aplikasi web dan mobile, serta keterampilan pemrograman modern.</li>
        <li><strong>Desain Komunikasi Visual (DKV)</strong>: Menumbuhkan kreativitas dan kemampuan siswa dalam bidang desain grafis, multimedia, serta branding visual.</li>
      </ul>
      <p>Kami berkomitmen untuk terus meningkatkan mutu pendidikan dan menciptakan lingkungan belajar yang kondusif agar lulusan SMK Negeri 64 dapat bersaing secara global dan siap menghadapi dunia kerja serta melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>

      <h3>Tujuan SMK Negeri 64</h3>
      <ol>
        <li>Menanamkan keimanan dan ketakwaan kepada Tuhan Yang Maha Esa sebagai dasar utama dalam kehidupan.</li>
        <li>Meningkatkan kompetensi siswa di bidang teknologi informasi dan desain komunikasi visual.</li>
        <li>Mencetak lulusan yang memiliki jiwa kewirausahaan dan mampu menciptakan lapangan kerja.</li>
        <li>Menyiapkan lulusan yang siap kerja sesuai dengan kebutuhan dunia usaha dan dunia industri.</li>
      </ol>
    </div>
  </section>

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

    <!-- Menu -->
    <div class="box">
      <h3>Menu Utama</h3>
      <a href="index.php"><i class="fas fa-arrow-right"></i> Beranda</a>
      <a href="profil.php"><i class="fas fa-arrow-right"></i> Profil</a>
      <a href="berita.php"><i class="fas fa-arrow-right"></i> Berita</a>
      <a href="kontak.php"><i class="fas fa-arrow-right"></i> Kontak</a>
    </div>

    <!-- Info -->
    <div class="box">
      <h3>Informasi</h3>
      <a href="#"><i class="fas fa-arrow-right"></i> Program Keahlian</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Fasilitas</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Mitra Industri</a>
    </div>

    <!-- Kontak -->
    <div class="box">
      <h3>Kontak Kami</h3>
      <a href="#"><i class="fas fa-phone"></i> (021) 12345678</a>
      <a href="#"><i class="fas fa-envelope"></i> info@smkn64.sch.id</a>
      <a href="#"><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 64, Kota Pintar</a>
    </div>

  </div>

  <!-- Lokasi Maps -->
  <div class="lokasi-maps">
    <h3>Lokasi Sekolah</h3>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31696.139836534!2d107.6101166!3d-6.9148649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65e4e3c8873%3A0x301e8f1fc28b420!2sBandung!5e0!3m2!1sid!2sid!4v1590402000000!5m2!1sid!2sid" 
      width="100%" 
      height="200" 
      style="border:0; border-radius:8px;" 
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

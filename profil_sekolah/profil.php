<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Sekolah - SMK Negeri 64 Jakarta</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

  <!-- Foto Sekolah -->
  <section class="section-box sambutan">
    <img src="assets/img/sekolah.jpeg" alt="Foto Sekolah" style="width: 100%; border-radius: 10px;">
  </section>

  <!-- Identitas Sekolah -->
  <section class="section-box sambutan">
    <h2>Identitas Sekolah</h2>
    <table style="width: 100%; line-height: 2;">
      <tr><td><strong>Nama</strong></td><td>: SMK Negeri 64 Jakarta</td></tr>
      <tr><td><strong>NPSN</strong></td><td>: 12345678</td></tr>
      <tr><td><strong>Status</strong></td><td>: Negeri</td></tr>
      <tr><td><strong>Alamat</strong></td><td>: Jl. Pendidikan No. 64, Kota Pintar, Indonesia</td></tr>
      <tr><td><strong>Email</strong></td><td>: info@smkn64.sch.id</td></tr>
      <tr><td><strong>Website</strong></td><td>: www.smkn64.sch.id</td></tr>
    </table>
  </section>

  <!-- Sejarah -->
  <section class="section-box sambutan">
    <h2>Sejarah Singkat Sekolah</h2>
    <p>SMK Negeri 64 Jakarta didirikan pada tahun 2005 sebagai sekolah kejuruan yang berfokus pada pengembangan keterampilan teknologi dan kewirausahaan. Dalam perjalanannya, sekolah ini telah berkembang pesat dengan berbagai jurusan unggulan dan fasilitas lengkap yang mendukung proses belajar mengajar. Saat ini, SMK Negeri 64 memiliki lebih dari 800 siswa aktif dan menjalin kerjasama erat dengan berbagai dunia usaha dan industri.</p>
  </section>

  <!-- Visi & Misi -->
  <section class="section-box sambutan">
    <h2>Visi Sekolah</h2>
    <p>Menjadi sekolah kejuruan unggulan dalam mencetak lulusan profesional, berkarakter, dan siap kerja di era digital.</p>

    <h2 style="margin-top: 25px;">Misi Sekolah</h2>
    <table style="width: 100%; line-height: 1.8;">
      <tr><td>1.</td><td>Menyelenggarakan pendidikan vokasi berbasis industri.</td></tr>
      <tr><td>2.</td><td>Menanamkan nilai-nilai karakter positif kepada siswa.</td></tr>
      <tr><td>3.</td><td>Meningkatkan kualitas SDM guru dan tenaga kependidikan.</td></tr>
      <tr><td>4.</td><td>Menjalin kerjasama dengan DUDI (Dunia Usaha dan Dunia Industri).</td></tr>
    </table>
  </section>

  <!-- Tujuan -->
  <section class="section-box sambutan">
    <h2>Tujuan Sekolah</h2>
    <table style="width: 100%; line-height: 1.8;">
      <tr><td>1.</td><td>Meningkatkan kompetensi lulusan agar siap kerja dan wirausaha.</td></tr>
      <tr><td>2.</td><td>Menciptakan lingkungan belajar yang kondusif dan inovatif.</td></tr>
      <tr><td>3.</td><td>Memperluas jejaring industri untuk praktik kerja lapangan.</td></tr>
    </table>
  </section>

  <!-- Program Keahlian -->
  <section class="section-box sambutan">
    <h2>Program Keahlian</h2>
    <table style="width: 100%; line-height: 1.8;">
      <tr><td>1.</td><td>Rekayasa Perangkat Lunak (RPL)</td></tr>
      <tr><td>2.</td><td>Desain Komunikasi Visual (DKV)</td></tr>
    </table>
  </section>

  <!-- Fasilitas -->
  <section class="section-box sambutan">
    <h2>Fasilitas Sekolah</h2>
    <table style="width: 100%; line-height: 1.8;">
      <tr><td>1.</td><td>Laboratorium Komputer dan Jaringan</td></tr>
      <tr><td>2.</td><td>Studio Desain & Multimedia</td></tr>
      <tr><td>3.</td><td>Ruang Kelas Multimedia</td></tr>
      <tr><td>4.</td><td>Perpustakaan Digital</td></tr>
      <tr><td>5.</td><td>Aula Serbaguna</td></tr>
      <tr><td>6.</td><td>Lapangan Olahraga</td></tr>
    </table>
  </section>

  <!-- Prestasi -->
  <section class="section-box sambutan">
    <h2>Prestasi Sekolah</h2>
    <table style="width: 100%; line-height: 1.8;">
      <tr><td>1.</td><td>Juara 1 LKS Web Development Tingkat Provinsi</td></tr>
      <tr><td>2.</td><td>Finalis Technopreneur Muda Nasional</td></tr>
      <tr><td>3.</td><td>SMK Penerima Penghargaan Sekolah Adiwiyata</td></tr>
    </table>
  </section>

  <!-- Profil Lulusan -->
  <section class="section-box sambutan">
    <h2>Profil Lulusan</h2>
    <p>Lulusan SMK Negeri 64 Jakarta telah bekerja di berbagai sektor industri teknologi, kreatif, dan komunikasi visual. Sebagian melanjutkan studi ke perguruan tinggi serta menjadi wirausaha muda di bidang digital.</p>
  </section>

</main>

<footer class="footer" id="contact">
  <div class="box-container">

    <div class="mainBox">
      <div class="content">
        <a href="#"><img src="assets/img/logo.png" alt="Logo Sekolah" style="height: 60px;"></a>
        <h1 class="logoName">SMK Negeri 64 Jakarta</h1>
      </div>
      <p>SMK Negeri 64 berkomitmen mencetak lulusan siap kerja, berkarakter, dan berdaya saing global.</p>
    </div>

    <div class="box">
      <h3>Menu Utama</h3>
      <a href="index.php"><i class="fas fa-arrow-right"></i> Beranda</a>
      <a href="profil.php"><i class="fas fa-arrow-right"></i> Profil</a>
      <a href="berita.php"><i class="fas fa-arrow-right"></i> Berita</a>
      <a href="kontak.php"><i class="fas fa-arrow-right"></i> Kontak</a>
    </div>

    <div class="box">
      <h3>Informasi</h3>
      <a href="#"><i class="fas fa-arrow-right"></i> Program Keahlian</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Fasilitas</a>
      <a href="#"><i class="fas fa-arrow-right"></i> Mitra Industri</a>
    </div>

    <div class="box">
      <h3>Kontak Kami</h3>
      <a href="#"><i class="fas fa-phone"></i> (021) 12345678</a>
      <a href="#"><i class="fas fa-envelope"></i> info@smkn64.sch.id</a>
      <a href="#"><i class="fas fa-map-marker-alt"></i> Jl. Pendidikan No. 64, Kota Pintar</a>
    </div>
  </div>

  <!-- Lokasi pindah ke bawah dan lebar -->
  <div class="lokasi-maps">
    <h3>Lokasi Sekolah</h3>
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31696.139836534!2d107.6101166!3d-6.9148649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e65e4e3c8873%3A0x301e8f1fc28b420!2sBandung!5e0!3m2!1sid!2sid!4v1590402000000!5m2!1sid!2sid" 
      width="100%" 
      height="200" 
      style="border: 0; border-radius: 8px;" 
      allowfullscreen="" 
      loading="lazy">
    </iframe>
  </div>

  <div class="share">
    <a href="#" class="fab fa-facebook-f"></a>
    <a href="#" class="fab fa-instagram"></a>
    <a href="#" class="fab fa-youtube"></a>
    <a href="#" class="fab fa-linkedin"></a>
  </div>

  <div class="credit">
    Dibuat oleh <span>Tim IT SMK Negeri 64</span> | &copy; 2025 All Rights Reserved
  </div>
</footer>

</body>
</html>

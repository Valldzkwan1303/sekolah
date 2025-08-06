<?php
session_start();
include '../config/koneksi.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = $_POST['password'];

  $query = "SELECT * FROM admin WHERE username='$username'";
  $result = mysqli_query($conn, $query);

  if ($data = mysqli_fetch_assoc($result)) {
    if ($password === $data['password']) {
      $_SESSION['admin'] = $data['username'];
      header("Location: admin_dashboard.php");
      exit();
    } else {
      $error = "Password salah!";
    }
  } else {
    $error = "Username tidak ditemukan!";
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #f4f4f4;
    }
    .navbar {
      background-color: #002b5b;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }
    .navbar-left {
      display: flex;
      align-items: center;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 20px;
    }
    .navbar-menu {
      list-style: none;
      display: flex;
      gap: 20px;
      margin: 0;
      padding: 0;
    }
    .navbar-menu li a {
      color: white;
      text-decoration: none;
      font-weight: 600;
    }
    .navbar-menu li a:hover {
      text-decoration: underline;
    }
    .login-box {
      width: 400px;
      background: white;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      margin: 100px auto;
      border-radius: 10px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #002b5b;
    }
    .login-box input {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .login-box button {
      width: 100%;
      padding: 12px;
      background-color: #002b5b;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: 600;
    }
    .login-box button:hover {
      background-color: #004080;
    }
    .login-box .back-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #002b5b;
      text-decoration: underline;
    }
    .error {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
    footer {
      background-color: #002b5b;
      color: white;
      padding: 30px 20px;
      margin-top: 50px;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-left">
      <img src="../assets/img/logo.png" alt="Logo Sekolah" style="height: 50px; margin-right: 10px;">
      <span class="navbar-brand">SMK Negeri 64 Jakarta</span>
    </div>
    <ul class="navbar-menu">
      <li><a href="../index.php">Beranda</a></li>
      <li><a href="../profil.php">Profil</a></li>
      <li><a href="../berita.php">Berita</a></li>
      <li><a href="../kontak.php">Kontak</a></li>
      <li><a href="login.php" class="active">Admin</a></li>
    </ul>
  </nav>

  <!-- Login Box -->
  <div class="login-box">
    <h2>Login Admin</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
      <?php if ($error): ?>
        <p class="error"><?= $error ?></p>
      <?php endif; ?>
    </form>
  </div>

<!-- Footer -->
<footer class="footer" id="contact">
  <div class="box-container">

    <!-- Logo & Deskripsi -->
    <div class="mainBox">
      <div class="content">
        <a href="#"><img src="../assets/img/logo.png" alt="Logo Sekolah" style="height: 60px;"></a>
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

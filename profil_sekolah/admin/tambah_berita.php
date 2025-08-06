<?php
session_start();
include '../config/koneksi.php';

// Cek jika belum login
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $judul = mysqli_real_escape_string($conn, $_POST['judul']);
  $isi = mysqli_real_escape_string($conn, $_POST['isi']);
  $tanggal = date("Y-m-d");

  $gambar = $_FILES['gambar']['name'];
  $tmp = $_FILES['gambar']['tmp_name'];
  $folder = "../assets/img/";

  if (!empty($gambar)) {
    $ext = pathinfo($gambar, PATHINFO_EXTENSION);
    $namaBaru = uniqid() . '.' . $ext;

    if (move_uploaded_file($tmp, $folder . $namaBaru)) {
      $query = "INSERT INTO berita (judul, isi, gambar, tanggal) VALUES ('$judul', '$isi', '$namaBaru', '$tanggal')";
    } else {
      echo "Upload gambar gagal!";
      exit;
    }
  } else {
    $query = "INSERT INTO berita (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')";
  }

  if (mysqli_query($conn, $query)) {
    header("Location: admin_dashboard.php");
    exit;
  } else {
    echo "Gagal menambahkan berita: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Berita - Admin</title>
  <link rel="stylesheet" href="../css/style_admin.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #002b5b;
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      margin-left: 20px;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .container {
      max-width: 600px;
      margin: 60px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #002b5b;
    }

    input[type="text"],
    textarea,
    input[type="file"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #002b5b;
      color: white;
      border: none;
      border-radius: 6px;
      font-weight: bold;
      cursor: pointer;
    }

    button:hover {
      background-color: #004080;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
  <div><strong>Admin Panel</strong> - Tambah Berita</div>
  <div>
    <a href="admin_dashboard.php">Dashboard</a>
    <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a>
  </div>
</div>

<!-- Form Tambah Berita -->
<div class="container">
  <h2>Tambah Berita Baru</h2>
  <form method="POST" enctype="multipart/form-data">
    <input type="text" name="judul" placeholder="Judul Berita" required>
    <textarea name="isi" rows="6" placeholder="Isi Berita" required></textarea>
    <input type="file" name="gambar" accept="image/*">
    <button type="submit">Simpan Berita</button>
  </form>
</div>

</body>
</html>

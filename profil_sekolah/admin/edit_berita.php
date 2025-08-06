<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

if (!isset($_GET['id'])) {
  header("Location: admin_dashboard.php");
  exit;
}

$id = intval($_GET['id']);
$query = mysqli_query($conn, "SELECT * FROM berita WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
  echo "Berita tidak ditemukan.";
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $judul = mysqli_real_escape_string($conn, $_POST['judul']);
  $isi = mysqli_real_escape_string($conn, $_POST['isi']);

  if ($_FILES['gambar']['name']) {
    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $target = "../assets/img/" . basename($gambar);
    move_uploaded_file($tmp, $target);

    $sql = "UPDATE berita SET judul='$judul', isi='$isi', gambar='$gambar' WHERE id='$id'";
  } else {
    $sql = "UPDATE berita SET judul='$judul', isi='$isi' WHERE id='$id'";
  }

  if (mysqli_query($conn, $sql)) {
    header("Location: admin_dashboard.php");
    exit;
  } else {
    echo "Gagal memperbarui berita.";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Berita</title>
  <link rel="stylesheet" href="../css/style_admin.css">
</head>
<body>
  <h2>Edit Berita</h2>
  <form method="POST" enctype="multipart/form-data">
    <label>Judul</label><br>
    <input type="text" name="judul" value="<?= htmlspecialchars($data['judul']) ?>" required><br><br>

    <label>Isi</label><br>
    <textarea name="isi" rows="10" required><?= htmlspecialchars($data['isi']) ?></textarea><br><br>

    <label>Ganti Gambar (opsional)</label><br>
    <input type="file" name="gambar" accept="image/*"><br><br>

    <button type="submit">Simpan Perubahan</button>
  </form>
</body>
</html>

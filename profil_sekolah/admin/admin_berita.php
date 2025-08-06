<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

include '../config/koneksi.php';
$berita = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Admin - Manajemen Berita</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <h2 style="text-align:center;">Manajemen Berita</h2>
  <a href="tambah_berita.php">+ Tambah Berita</a> | 
  <a href="logout_admin.php" onclick="return confirm('Keluar?')">Logout</a>
  <br><br>
  <table border="1" cellpadding="10" cellspacing="0" style="width:100%;">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($berita)) : ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= htmlspecialchars($row['judul']) ?></td>
      <td><?= $row['tanggal'] ?></td>
      <td>
        <a href="edit_berita.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus_berita.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

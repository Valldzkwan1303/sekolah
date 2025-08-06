<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="style_admin.css">
</head>
<body>

  <h2>Dashboard Admin</h2>
  <p>Selamat datang, <strong><?= $_SESSION['admin']; ?></strong></p>

  <p>
    <a href="tambah_berita.php">➕ Tambah Berita</a> |
    <a href="pesan_kontak.php">📬 Pesan Kontak</a> |
    <a href="logout.php" onclick="return confirm('Keluar dari dashboard?')">🚪 Logout</a>
  </p>

  <hr><br>

  <h3>Daftar Berita</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr style="background-color:#eee;">
      <th>No</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $result = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
    if (mysqli_num_rows($result) > 0):
      while ($row = mysqli_fetch_assoc($result)):
    ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row['judul']); ?></td>
        <td><?= date("d-m-Y", strtotime($row['tanggal'])); ?></td>
        <td><img src="../assets/img/<?= $row['gambar']; ?>" width="100" style="border-radius:5px;"></td>
        <td>
          <a href="edit_berita.php?id=<?= $row['id']; ?>">✏️ Edit</a> |
          <a href="hapus_berita.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">🗑️ Hapus</a>
        </td>
      </tr>
    <?php
      endwhile;
    else:
    ?>
      <tr><td colspan="5" style="text-align: center;">Belum ada berita ditambahkan.</td></tr>
    <?php endif; ?>
  </table>

</body>
</html>

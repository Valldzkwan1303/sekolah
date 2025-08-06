<?php
session_start();
include '../config/koneksi.php';

if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f4f6f8;
      padding: 40px 20px;
      margin: 0;
    }
    h2 {
      color: #002b5b;
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
    }
    .action-buttons {
      text-align: center;
      margin-bottom: 30px;
    }
    .action-buttons a {
      display: inline-block;
      background-color: #0056b3;
      color: white;
      padding: 10px 20px;
      margin: 0 10px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s;
    }
    .action-buttons a:hover {
      background-color: #003f8a;
    }
    .table-container {
      overflow-x: auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
      overflow: hidden;
    }
    table thead {
      background-color: #002b5b;
      color: white;
    }
    table th, table td {
      padding: 14px 20px;
      text-align: center;
      border-bottom: 1px solid #eee;
    }
    table tr:hover {
      background-color: #f9f9f9;
    }
    img {
      max-height: 60px;
      border-radius: 6px;
    }
    .aksi a {
      color: #007bff;
      text-decoration: none;
      margin: 0 5px;
      font-weight: 600;
    }
    .aksi a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      table th, table td {
        padding: 10px;
      }
      .action-buttons a {
        margin: 8px 5px;
        display: block;
      }
    }
  </style>
</head>
<body>

  <h2>Dashboard Admin</h2>

  <div class="action-buttons">
    <a href="tambah_berita.php">+ Tambah Berita</a>
    <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">Logout</a>
  </div>

  <div class="table-container">
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Gambar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM berita ORDER BY tanggal DESC");
        while ($row = mysqli_fetch_assoc($result)) {
          $gambar = !empty($row['gambar']) ? $row['gambar'] : 'default.jpg';
        ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['judul']) ?></td>
            <td><?= date('d M Y', strtotime($row['tanggal'])) ?></td>
            <td><img src="../assets/img/<?= htmlspecialchars($gambar) ?>" alt="gambar"></td>
            <td class="aksi">
              <a href="edit_berita.php?id=<?= $row['id'] ?>">Edit</a> |
              <a href="hapus_berita.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

</body>
</html>

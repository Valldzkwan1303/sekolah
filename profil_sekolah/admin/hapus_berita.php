<?php
session_start();
include '../config/koneksi.php';

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}

// Validasi ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
  header("Location: admin_dashboard.php");
  exit;
}

$id = intval($_GET['id']);

// Hapus berita berdasarkan ID
mysqli_query($conn, "DELETE FROM berita WHERE id='$id'");

// Redirect kembali ke dashboard
header("Location: admin_dashboard.php");
exit;
?>

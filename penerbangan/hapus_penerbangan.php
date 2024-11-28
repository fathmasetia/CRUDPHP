<?php
session_start();
include("../config.php");
if(isset($_GET['id'])){
    $penerbangan_id = $_GET['id'];
    $sql = "DELETE FROM penerbangan WHERE penerbangan_id=$penerbangan_id";
    $query = mysqli_query($db, $sql);
    if ($query) {
        $_SESSION['notifikasi'] = "Data Penerbangan Berhasil Ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data Penerbangan Gagal Ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>
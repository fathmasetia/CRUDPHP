<?php
session_start();
include("../config.php");
if(isset($_POST['simpan'])) {
    $penerbangan_id = $_POST['penerbangan_id'];
    $kota_asal = $_POST['kota_asal'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $jam_keberangkatan = $_POST['jam_keberangkatan'];

    $sql = "UPDATE penerbangan SET
    kota_asal='$kota_asal',
    kota_tujuan='$kota_tujuan',
    jam_keberangkatan='$jam_keberangkatan'
    WHERE penerbangan_id = $penerbangan_id";

    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['notifikasi'] = "Data Penerbangan Berhasil Diupdate!";
    } else {
        $_SESSION['notifikasi'] = "Data Penerbangan Gagal Diupdate!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>
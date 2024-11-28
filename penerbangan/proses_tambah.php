<?php
session_start();
include("../config.php");
if(isset($_POST['simpan'])){
    $kota_asal = $_POST['kota_asal'];
    $kota_tujuan = $_POST['kota_tujuan'];
    $jam_keberangkatan = $_POST['jam_keberangkatan'];

    $sql = "INSERT INTO penerbangan
    (kota_asal, kota_tujuan, jam_keberangkatan) VALUES
    ('$kota_asal', '$kota_tujuan', '$jam_keberangkatan')";

    $query = mysqli_query($db, $sql);

    if($query) {
        $_SESSION['notifikasi'] = "Data Penerbangan berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data Penerbangan Gagal ditambahkan!";
    }
    header('Location: index.php');
} else {
    die("Akses ditolak...");
}
?>
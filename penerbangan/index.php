<?php
include("../config.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Penerbangan</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Penerbangan</h2>
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <?php unset($_SESSION['notifikasi']) ?>
        <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Kota Asal</th>
                <th>Kota Tujuan</th>
                <th>Jam Keberangkatan</th>
                <th><a href="tambah_penerbangan.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = $db->query("SELECT * FROM penerbangan");
            while ($penerbangan = $query->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $penerbangan['kota_asal'] ?></td>
                    <td><?php echo $penerbangan['kota_tujuan'] ?></td>
                    <td><?php echo $penerbangan['jam_keberangkatan'] ?></td>
                    <td align="center">
                        <a href="edit_penerbangan.php?id=<?php echo $penerbangan['penerbangan_id'] ?>">Edit</a>
                        <a onclick="return confirm('Anda yakin ingin menghapus data?')"
                        href="hapus_penerbangan.php?id=<?php echo $penerbangan['penerbangan_id'] ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>
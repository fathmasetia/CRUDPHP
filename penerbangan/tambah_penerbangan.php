<!DOCTYPE html>
<html>
<head>
    <title>Data Penerbangan</title>
</head>
<body>
    <h3>Tambah Data Penerbangan</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>KOTA_ASAL</td>
                <td><input type="text" name="kota_asal" required></td>
            </tr>
            <tr>
                <td>KOTA_TUJUAN</td>
                <td><input type="text" name="kota_tujuan" required></td>
            </tr>
            <tr>
                <td>JAM_KEBERANGKATAN</td>
                <td><input type="time" name="jam_keberangkatan" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>
<?php
include("../config.php");
$id = $_GET['id'];
$query = $db->query("SELECT * FROM  penerbangan WHERE penerbangan_id = '$id'");
$penerbangan = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Penerbangan</title>
</head>
<body>
    <h3>Edit Penerbangan</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="penerbangan_id" value="<?php echo $penerbangan['penerbangan_id']; ?>">
            <table border="0">
                <tr>
                    <td>Kota Asal</td>
                    <td>
                        <input type="text" name="kota_asal"
                        value="<?php echo $penerbangan['kota_asal']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Kota Tujuan</td>
                    <td>
                        <input type="text" name="kota_tujuan"
                        value="<?php echo $penerbangan['kota_tujuan']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Jam_keberangkatan</td>
                    <td>
                        <input type="time" name="jam_keberangkatan"
                        value="<?php echo $penerbangan['jam_keberangkatan']; ?>" required>
                    </td>
                </tr>
            </table>
            <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
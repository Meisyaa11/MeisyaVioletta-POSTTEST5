<?php
require 'koneksi.php';

if (isset($_POST['tambah'])) {
    $nama_tempat = $_POST['nama_tempat'];
    $jumlah_tiket = $_POST['jumlah_tiket'];
    $tanggal_kunjungan = $_POST['tanggal_kunjungan'];
    $waktu_kunjungan = $_POST['waktu_kunjungan'];

    $insert_query = "INSERT INTO tiket (nama_tempat, jumlah_tiket, tanggal_kunjungan, waktu_kunjungan) VALUES ('$nama_tempat', $jumlah_tiket, '$tanggal_kunjungan', '$waktu_kunjungan')";

    if (mysqli_query($conn, $insert_query)) {
        $last_insert_id = mysqli_insert_id($conn);
        header("Location: hasil.php?id_tempat=$last_insert_id");
        exit();
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = 'tambah.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
            <label for="nama_tempat">Nama Tempat</label>
            <select name="nama_tempat" class="textfield">
                <option value="Maratua Island">Maratua Island</option>
                <option value="Stone Garden">Stone Garden</option>
                <option value="Candi Borobudur">Candi Borobudur</option>
                <option value="Grafika Cikole">Grafika Cikole</option>
                <option value="Hua Hin">Hua Hin</option>
                <option value="Maldives Island">Maldives Island</option>
                <option value="Danau Cermin">Danau Cermin</option>
                <option value="Lawang Sewu">Lawang Sewu</option>
                <option value="Klenteng Sam Poo">Klenteng Sam Poo</option>
                <option value="Istana Maimun">Istana Maimun</option>
                <option value="Rabbit Town">Rabbit Town</option>
                <option value="MotoMoto">MotoMoto</option>
                <option value="Farmhouse">Farmhouse</option>
                <option value="Museum Angkut">Museum Angkut</option>
                <option value="Kota Mini">Kota Mini</option>
                <option value="Jurang Tembelan">Jurang Tembelan</option>
            </select>
                <label for="jumlah_tiket">Jumlah Tiket</label>
                <input type="number" name="jumlah_tiket" class="textfield">
                <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan" class="textfield">
                <label for="waktu_kunjungan">Waktu Kunjungan</label>
                <input type="time" name="waktu_kunjungan" class="textfield">
                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">
                <a href="hasil.php"></a>
            </form>
        </div>
    </section>
</body>
</html>
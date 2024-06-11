<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>Document</title>
</head>
<body>
    <center>
    <form method=POST class = "Form">
    <label>Masukkan nama Anda : </label>
    <input type="text" id="nama" name="nama" required><br>

    <label>Masukkan Waktu Rental (Per Hari): </label>
    <input type="number" id="waktu" name="waktu" required><br>

    <label>Pilih jenis Motor :</label>
    <select id="jenis" name="jenis">
        <option value="Matic">Matic</option>
        <option value="SportBike">SportBike</option>
        <option value="Scooter">Scooter</option>
        <option value="Cruiser">Cruiser</option>
    </select> <br>
    <input type="submit" value="Kirim" name="kirim">
    </form>
</center>
</body>
</html>

<?php
include ('Waktu.php');
if(isset($_POST['kirim'])) {
    $proses = new Beli();
    $proses->setHarga(50000, 60000, 70000, 80000);
    $proses->nama = $_POST['nama'];
    $proses->waktu = $_POST['waktu'];
    $proses->jenis = $_POST['jenis'];
    echo $proses->CetakPembelian();
}
?>
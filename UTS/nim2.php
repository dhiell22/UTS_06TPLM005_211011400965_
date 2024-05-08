<!DOCTYPE html>
<html>
<head>
    <title>Input Data Piala Asia U-23 Qatar Group B</title>
</head>
<body>

<h2>Input Data Piala Asia U-23 Qatar Group B</h2>

<form method="post" action="">
    <label for="negara">Nama Negara:</label>
    <select name="negara" id="negara">
        <option value="Korea Selatan U-23">Korea Selatan U-23</option>
        <option value="Jepang U-23">Jepang U-23</option>
        <option value="Tiongkok U-23">Tiongkok U-23</option>
        <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
    </select><br><br>
    <label for="pertandingan">Jumlah Pertandingan (P):</label>
    <input type="number" name="pertandingan" id="pertandingan" required><br><br>
    <label for="menang">Jumlah Menang (M):</label>
    <input type="number" name="menang" id="menang" required><br><br>
    <label for="seri">Jumlah Seri (S):</label>
    <input type="number" name="seri" id="seri" required><br><br>
    <label for="kalah">Jumlah Kalah (K):</label>
    <input type="number" name="kalah" id="kalah" required><br><br>
    <label for="poin">Jumlah Poin:</label>
    <input type="number" name="poin" id="poin" required><br><br>
    <label for="operator">Nama Operator:</label>
    <input type="text" name="operator" id="operator" required><br><br>
    <label for="nim">NIM Mahasiswa:</label>
    <input type="text" name="nim" id="nim" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $negara = $_POST['negara'];
    $pertandingan = $_POST['pertandingan'];
    $menang = $_POST['menang'];
    $seri = $_POST['seri'];
    $kalah = $_POST['kalah'];
    $poin = $_POST['poin'];
    $operator = $_POST['operator'];
    $nim = $_POST['nim'];

    // Membaca isi dari db.html
    $data = file_get_contents('db.html');

    // Mendapatkan waktu dan jam sekarang
    $waktu = date("d M Y H:i:s");

    // Mengganti placeholder dengan data yang baru
    $data_baru = str_replace("Data Group B Piala Asia Qatar U-23", "Data Group B Piala Asia Qatar U-23<br>Per $waktu (Waktu dan Jam Sekarang)<br>Nama Operator/NIM: $operator/$nim", $data);
    $data_baru .= "<br><br>$negara\t$pertandingan\t$menang\t$seri\t$kalah\t$poin";

    // Menuliskan data baru ke db.html
    file_put_contents('db.html', $data_baru);
}
?>

</body>
</html>
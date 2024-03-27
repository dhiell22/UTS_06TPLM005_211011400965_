<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        input[type="text"],
        input[type="number"] {
            width: calc(100% - 80px); /* 100% width minus button width and margin */
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 80px;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Data</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required>

        <label for="jurusan">Jurusan:</label>
        <input type="text" name="jurusan" required>

        <label for="nilaiTugas">Nilai Tugas:</label>
        <input type="number" name="nilaiTugas" required>

        <label for="nilaiUTS">Nilai UTS:</label>
        <input type="number" name="nilaiUTS" required>

        <label for="nilaiUAS">Nilai UAS:</label>
        <input type="number" name="nilaiUAS" required>

        <input type="submit" value="Hitung">
    </form>
</div>

<?php
// Proses data jika ada pengiriman formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $nilaiTugas = $_POST["nilaiTugas"];
    $nilaiUTS = $_POST["nilaiUTS"];
    $nilaiUAS = $_POST["nilaiUAS"];

    // Lakukan pengolahan data di sini, misalnya perhitungan rata-rata nilai
    $rataRata = ($nilaiTugas + $nilaiUTS + $nilaiUAS) / 3;

    // Tentukan grade
    if ($rataRata >= 80) {
        $grade = 'A';
    } elseif ($rataRata >= 70) {
        $grade = 'B';
    } elseif ($rataRata >= 60) {
        $grade = 'C';
    } elseif ($rataRata >= 50) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    // Tentukan keterangan lulus atau tidak
    $keterangan = ($rataRata >= 65) ? 'Lulus' : 'Tidak Lulus';

    // Tampilkan hasil atau lakukan pengolahan lainnya
    echo "<div class='container'>";
    echo "<h2>Hasil Perhitungan:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Jurusan: $jurusan</p>";
    echo "<p>Nilai Tugas: $nilaiTugas</p>";
    echo "<p>Nilai UTS: $nilaiUTS</p>";
    echo "<p>Nilai UAS: $nilaiUAS</p>";
    echo "<p>Rata-rata Nilai: $rataRata</p>";
    echo "<p>Grade: $grade</p>";
    echo "<p>Keterangan: $keterangan</p>";
    echo "</div>";
}
?>

</body>
</html>

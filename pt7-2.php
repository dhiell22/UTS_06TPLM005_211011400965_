<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menghitung Luas Segitiga</title>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
  }
  table {
    margin: 20px auto;
    border-collapse: collapse;
  }
  th, td {
    padding: 8px 12px;
    border: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
</style>
</head>
<body>
<h2>Menghitung Luas Segitiga (cara ke 1)</h2>

<?php
// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Data alas dan tinggi dalam array
$alas = [5, 8, 10, 6, 12];
$tinggi = [7, 6, 9, 5, 8];

// Menghitung luas segitiga dari setiap pasangan alas dan tinggi dalam array
$luasSegitiga = [];
for ($i = 0; $i < count($alas); $i++) {
    $luasSegitiga[$i] = hitungLuasSegitiga($alas[$i], $tinggi[$i]);
}

// Menampilkan hasil dalam bentuk tabel
echo "<table>";
echo "<tr><th>No</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";
for ($i = 0; $i < count($alas); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $alas[$i] . "</td>";
    echo "<td>" . $tinggi[$i] . "</td>";
    echo "<td>" . $luasSegitiga[$i] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>

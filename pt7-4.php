<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
    <style>
        .comma-separated {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Deret Bilangan Ganjil Habis Dibagi 3</h1>
    <form method="post">
        <label for="nilai_awal">Nilai Awal:</label>
        <input type="text" name="nilai_awal" id="nilai_awal" required><br><br>
        <label for="nilai_akhir">Nilai Akhir:</label>
        <input type="text" name="nilai_akhir" id="nilai_akhir" required><br><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    // Fungsi untuk mengecek apakah suatu bilangan ganjil dan habis dibagi 3
    function isOddAndDivisibleBy3($number) {
        return ($number % 2 !== 0) && ($number % 3 === 0);
    }

    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];

        // Inisialisasi jumlah dan banyaknya deret bilangan
        $jumlah = 0;
        $banyaknya_deret = 0;

        // Menampilkan deret bilangan ganjil yang habis dibagi 3 dan menghitung jumlah serta banyaknya deret
        echo "<p>Deret bilangan ganjil yang habis dibagi 3 dari $nilai_awal hingga $nilai_akhir adalah:</p>";
        echo "<p class='comma-separated'>";
        $deret_output = [];
        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if (isOddAndDivisibleBy3($i)) {
                $deret_output[] = $i;
                $jumlah += $i;
                $banyaknya_deret++;
            }
        }
        echo implode(", ", $deret_output);
        echo "</p>";

        // Menampilkan jumlah dan banyaknya deret bilangan
        echo "<p>Jumlah bilangan: $banyaknya_deret</p>";
        echo "<p>Jumlah nilai bilangan: <span>";
        for ($i = 0; $i < count($deret_output); $i++) {
            if ($i > 0) {
                echo " + ";
            }
            echo $deret_output[$i];
        }
        echo " = $jumlah</span></p>";
    }
    ?>
</body>
</html>

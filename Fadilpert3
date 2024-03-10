<?php

function hitung_nilai_akhir($kehadiran, $tugas, $uts, $uas) {
    $bobot_kehadiran = 0.1;
    $bobot_tugas = 0.2;
    $bobot_uts = 0.3;
    $bobot_uas = 0.4;

    $nilai_akhir = ($kehadiran * $bobot_kehadiran + $tugas * $bobot_tugas +
                    $uts * $bobot_uts + $uas * $bobot_uas);
    
    return $nilai_akhir;
}

function tentukan_grade($nilai_akhir) {
    if ($nilai_akhir >= 80) {
        return 'A';
    } elseif ($nilai_akhir >= 70) {
        return 'B';
    } elseif ($nilai_akhir >= 60) {
        return 'C';
    } elseif ($nilai_akhir >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}

function tentukan_keterangan($nilai_akhir) {
    if ($nilai_akhir > 65) {
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}

$nama_matakuliah = $_POST["matakuliah"];
$nama_mahasiswa = $_POST["nama"];
$nim_mahasiswa = $_POST["nim"];
$jumlah_kehadiran = $_POST["kehadiran"];
$nilai_kehadiran = $_POST["nilai_tugas"];
$nilai_tugas = $_POST["nilai_tugas"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];

$nilai_akhir = hitung_nilai_akhir($jumlah_kehadiran, $nilai_tugas, $nilai_uts, $nilai_uas);
$grade = tentukan_grade($nilai_akhir);
$keterangan = tentukan_keterangan($nilai_akhir);

echo "<br>";
echo "NILAI AKADEMIK............................." . $nama_matakuliah . "<br>";
echo "Nama:....................." . $nama_mahasiswa . "<br>";
echo "NIM:..................." . $nim_mahasiswa . "<br>";
echo "Jumlah Kehadiran :..............." . $jumlah_kehadiran . "<br>";
echo "Nilai Kehadiran :..............." . $nilai_kehadiran . "<br>";
echo "Nilai Tugas :..............." . $nilai_tugas . "<br>";
echo "Nilai UTS :..............." . $nilai_uts . "<br>";
echo "Nilai UAS :..............." . $nilai_uas . "<br>";
echo "Nilai Akhir :..............." . number_format($nilai_akhir, 2) . "<br>";
echo "Grade :..............." . $grade . "<br>";
echo "Keterangan :............." . $keterangan . "<br>";

?>
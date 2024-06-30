<?php
if (!isset($_POST['halaman_perhitungan'])) {
if (empty($_COOKIE['kodene'])) { ?>
<script>
alert('Maaf untuk mengakses halaman ini anda harus login !');
location.href = "index.php?p=login";
</script>
<?php 
die();
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        border-collapse: collapse;
        padding: 16px;
        margin: 16px;
        max-width: 100%;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Adjust the values as needed */
    }

    .card2 {
        border: 1px solid #ccc;
        /* border-radius: 8px; */
        border-collapse: collapse;
        padding: 20px;
        margin: 20px;
        max-width: 100%;
        background-color: white;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    }

    .card3 {
        border: 1px solid #ccc;
        border-radius: 8px;
        border-collapse: collapse;
        padding: 16px;
        margin: 16px;
        max-width: 100%;
        background-color: white;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
    }
    </style>
</head>

<body>
    <?php
    $id_member = decrypt($_COOKIE['kodene']);
    $sql = "select * from data_member where id_member = '$id_member'";
    $result = mysql_query($sql);
    $data = mysql_fetch_array($result);
    ?>
    <div class="container">
        <div class="card">
            <div class="card2">
                <div class="card3" style="width: 50%;">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group" style="margin: 10px;">
                            <label for="">Nama Lengkap</label>
                            <br>
                            <input class="form-control" type="text" name="nama" id="nama" value="<?= $data['nama'] ?>">
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Jenis Kelamin</label>
                            <br>
                            <input class="form-control" type="text" name="jenis_kelamin" id="jenis_kelamin"
                                value="<?= $data['jenis_kelamin'] ?>">
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Tanggal Lahir</label>
                            <br>
                            <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir"
                                value="<?= $data['tanggal_lahir'] ?>">
                        </div>


                        <div class="form-group" style="margin: 10px;">
                            <label for="">Tinggi Badan (Cm)</label>
                            <br>
                            <input class="form-control" type="number" name="tinggi_badan" id="tinggi_badan"
                                value="<?= $data['tinggi_badan'] ?>">
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Umur (Tahun)</label>
                            <br>
                            <input class="form-control" type="number" name="umur" id="umur" value="">
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Berat Badan (Kg)</label>
                            <br>
                            <input class="form-control" type="number" name="berat_badan" id="berat_badan"
                                value="<?= $data['berat_badan'] ?>">
                        </div>


                        <div class="form-group" style="margin: 10px;">
                            <label for="">Tujuan Latihan</label>
                            <br>
                            <select class="form-control" type="number" name="tujuan_latihan" id="tujuan_latihan"
                                required>
                                <option value="">-- Tujuan Latihan --</option>
                                <option value="1">Kekuatan (Strength)</option>
                                <option value="2">Tambah massa otot (Hyperthropy)</option>
                                <option value="3">Daya Tahan (Endurance)</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Riwayat Cedera</label>
                            <br>
                            <select class="form-control" type="text" name="riwayat_cedera" id="riwayat_cedera" required>
                                <option value="">-- Pilih Riwayat Cedera --</option>
                                <option value="0">Normal</option>
                                <option value="1">Terkilir</option>
                                <option value="2">Operasi</option>
                                <option value="3">Cedera>1</option>
                            </select>
                        </div>

                        <div class="form-group" style="margin: 10px;">
                            <label for="">Riwayat Penyakit</label>
                            <br>
                            <select class="form-control" type="text" name="riwayat_penyakit" id="riwayat_penyakit"
                                required>
                                <option value="">-- Pilih Riwayat Penyakit --</option>
                                <option value="0">Normal</option>
                                <option value="1">Asma</option>
                                <option value="2">Hipertensi</option>
                                <option value="3">Jantung</option>
                                <option value="4">Penyakit>1</option>
                            </select>
                        </div>
                        <input type="hidden" name="halaman_perhitungan" id="halaman_perhitungan" value="berhasil">
                        <input type="hidden" name="id_member" id="id_member" value="<?php echo $id_member; ?>">
                        <div class="form-group" style="margin:10px;">
                            <button class="btn btn-warning">Proses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>


<!-- <button onclick="hitungUmur()">Hitung Umur</button> -->

<script>
document.addEventListener('DOMContentLoaded', function() {

    function hitungUmur() {
        // Mendapatkan tanggal lahir dari input
        const tanggalLahir = document.getElementById('tanggal_lahir').value;

        if (!tanggalLahir) {
            alert("Silakan masukkan tanggal lahir.");
            return;
        }

        // Menghitung umur berdasarkan tanggal lahir
        const today = new Date();
        const birthDate = new Date(tanggalLahir);
        let age = today.getFullYear() - birthDate.getFullYear();
        const monthDiff = today.getMonth() - birthDate.getMonth();

        // Mengkoreksi umur jika bulan dan tanggal belum lewat dalam tahun ini
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        // Menampilkan umur di elemen dengan id 'umur'
        document.getElementById('umur').value = age;
    }

    hitungUmur();
})
</script>
<?php } ?>

<!-- ========= -->
<?php if (isset($_POST['halaman_perhitungan'])) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.card {
    border: 1px solid #ccc;
    border-radius: 8px;
    border-collapse: collapse;
    /*agar tidak ada pemisah antar kolom dan baris*/
    padding: 16px;
    margin: 16px;
    max-width: 100%;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    /* Adjust the values as needed */
}

table {
    border-collapse: collapse;
    border: 1px solid black;
}

tr>th {
    border: 1px solid black;
}

tr>td {
    border: 1px solid black;
}
</style>

<body>

    <?php

    $nama_lengkap = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $id_member = $_POST['id_member'];    


    $umur = $_POST['umur'];    

    if ($umur >= 19 && $umur <= 39) {
        $nilai_umur = 0;
    } elseif ($umur >= 40 && $umur <= 60) {
        $nilai_umur = 1;
    }

    $nilai_tujuan_latihan = $_POST['tujuan_latihan'];    

    if ($nilai_tujuan_latihan == 1) {
        $tujuan_latihan = 'Tambah Kekuatan (Strength)';
    } elseif ($nilai_tujuan_latihan == 2) {
        $tujuan_latihan = 'Tambah massa otot (Hyperthropy)';
    } elseif ($nilai_tujuan_latihan == 3) {
        $tujuan_latihan = 'Daya Tahan (Endurance)';
    }

    $nilai_riwayat_cedera = $_POST['riwayat_cedera'];    

    if ($nilai_riwayat_cedera == 0) {
        $riwayat_cedera = 'Normal';
    } elseif ($nilai_riwayat_cedera == 1) {
        $riwayat_cedera = 'Terkilir';
    } elseif ($nilai_riwayat_cedera == 2) {
        $riwayat_cedera = 'Operasi';
    } elseif ($nilai_riwayat_cedera == 3) {
        $riwayat_cedera = 'Cedera>1';
    }

    $nilai_riwayat_penyakit = $_POST['riwayat_penyakit'];    

    if ($nilai_riwayat_penyakit == 0) {
        $riwayat_penyakit = 'Normal';
    } elseif ($nilai_riwayat_penyakit == 1) {
        $riwayat_penyakit = 'Asma';
    } elseif ($nilai_riwayat_penyakit == 2) {
        $riwayat_penyakit = 'Hipertensi';
    } elseif ($nilai_riwayat_penyakit == 3) {
        $riwayat_penyakit = 'Jantung';
    } elseif ($nilai_riwayat_penyakit == 4) {
        $riwayat_penyakit = 'Penyakit>1';
    }

// $members = [
//     [
//         'nama' => 'Ridho',
//         'jenis_kelamin' => 'Laki-laki',
//         'berat_badan' => 60,
//         'tinggi_badan' => 178,
//         'usia' => 22,
//         'riwayat_penyakit' => 'Normal',
//         'riwayat_cedera' => 'Normal',
//         'bmi' => 18.94,
//         'tujuan' => 'Kekuatan'
//     ]
// ];

function calculateBMI($weight, $height) {
    return $weight / (($height / 100) ** 2);
}

function calculateBMR($weight, $height, $age, $gender) {
    if ($gender == 'laki-laki') {
        return 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    } else {
        return 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    }
}

function determineBodyCategory($bmi) {
    if ($bmi < 18.5) return 'Underweight';
    if ($bmi >= 18.5 && $bmi <= 25) return 'Normal weight';
    if ($bmi > 25 && $bmi <= 30) return 'Overweight';
    if ($bmi > 30) return 'Obese';
}

$bmi = calculateBMI($berat_badan, $tinggi_badan);

if ($bmi < 18.5) {
    $nilai_bmi = 0;
} elseif ($bmi >= 18.5 && $bmi <= 25) {
    $nilai_bmi = 1;
} elseif ($bmi > 25 && $bmi <= 30) {
    $nilai_bmi = 2;
} elseif ($bmi > 30) {
    $nilai_bmi = 3;
}

$bmr = calculateBMR($berat_badan, $tinggi_badan, $umur, $jenis_kelamin);
$body_category = determineBodyCategory($bmi);
?>

    <div class="container">
        <div class="card">

            <div style="margin: 10px; border-bottom: 1px solid black;">
                <h1 style="margin-bottom: 8px;">Hasil Perhitungan :</h1>
            </div>
            <div style="margin-bottom: 50px;">
                <div style="margin: 10px; font-weight: 600;">
                    <span>
                        <p>Nama : <?php echo $nama_lengkap; ?></p>
                        <p>Jenis Kelamin : <?php echo $jenis_kelamin; ?></p>
                        <p>Berat Badan : <?php echo $berat_badan; ?> Kg</p>
                        <p>Tinggi Badan : <?php echo $tinggi_badan; ?> cm</p>
                        <p>Usia : <?php echo $umur; ?> tahun</p>
                    </span>
                </div>
            </div>
            <div style="margin-bottom: 50px;">
                <div style="margin: 10px; font-weight: 600;">
                    <span>
                        <p>BMI (Body Mass Index) = <?php echo number_format($bmi, 2); ?></p>
                        <p>BMR (Basal Metabolic Rate) = <?php echo number_format($bmr, 2); ?></p>
                        <p>Kategori Tubuh = <?php echo $body_category; ?></p>
                        <p>Tujuan Latihan = <?php echo $tujuan_latihan; ?></p>
                        <p>Riwayat Cedera = <?php echo $riwayat_cedera; ?></p>
                        <p>Riwayat Penyakit = <?php echo $riwayat_penyakit; ?></p>
                    </span>
                </div>
            </div>

            <?php
      $gap_dan_bobot = array(
        '0' => '6',
        '1' => '5.5',
        '-1' => '5',
        '2' => '4.5',
        '-2' => '4',
        '3' => '3.5',
        '-3' => '3',
        '4' => '2.5',
        '-4' => '2',
        '5' => '1.5',
        '-5' => '1'
        );
    
            $gap_bmi = $nilai_bmi - 5;
            $gap_rp = $nilai_riwayat_penyakit - 3; 
            $gap_rc = $nilai_riwayat_cedera - 4; 
            $gap_umur = $nilai_tujuan_latihan - 2;        
            $gap_tujuan = $nilai_umur - 1;                

            foreach ($gap_dan_bobot as $key => $value) {

                // map gap adalah bobot dari gap itu sendiri
                if ($gap_rp == $key) {
                    $map_gap_rp = $value;
                }
                if ($gap_rc == $key) {
                    $map_gap_rc = $value;
                }
                if ($gap_bmi == $key) {
                    $map_gap_bmi = $value;
                }
                if ($gap_umur == $key) {
                    $map_gap_umur = $value;
                }
                if ($gap_tujuan == $key) {
                    $map_gap_tujuan = $value;
                }
            }

            // nilai akhir didapat dari perkalian dan penambahan dari nilai kriteria map di kali dengan bobot profil kriteria            
            $nilai_akhir = ($map_gap_rp * 0.15) + ($map_gap_rc * 0.25) + ($map_gap_bmi * 0.45) + ($map_gap_umur * 0.05) + ($map_gap_tujuan * 0.1);
            
            
            
            // $data_repatisi = array(
            //     '1-4' => array(
            //         array('0', '0', '0', '1', '0'),
            //         array('1', '1', '1', '2', '1'),
            //         array('2', '2', '2', '3', '0'),
            //         array('3', '3', '3', '1', '1'),
            //         array('4', '0', '0', '2', '0')
            //     ),
            //     '8-12' => array(
            //         array('0', '0', '0', '1', '1'),
            //         array('1', '1', '1', '2', '0'),
            //         array('2', '2', '2', '3', '1'),
            //         array('3', '3', '3', '1', '0'),
            //         array('4', '0', '0', '2', '1')
            //     ),
            //     '12-25' => array(
            //         array('0', '0', '0', '1', '0'),
            //         array('1', '1', '1', '2', '1'),
            //         array('2', '2', '2', '3', '0'),
            //         array('3', '3', '3', '1', '1'),
            //         array('4', '0', '0', '2', '0')
            //     )
            // );

         
            $first_values = array(5, 4, 3, 2, 1);
            // $nilai_akhir = 3.45;
            $hasil_akhir_array = []; // Array untuk menyimpan hasil akhir
            
            $bobot_repatisi = array(
                '1-4' => 1, 
                '8-12' => 2,
                '12-25' => 3 
                );  

                foreach ($bobot_repatisi as $key => $value) {
                
                    if ($value == $nilai_tujuan_latihan) {
                        $repatisi = $key;
                }
             }

            $sql = "SELECT * FROM data_pelatihan where repatisi = '$repatisi'";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_array($result)) {
                $gap_rp = $row['rp'] - $first_values[0];
                $gap_rc = $row['rc'] - $first_values[1];
                $gap_bmi = $row['bmi'] - $first_values[2];
                $gap_tujuan = $row['tujuan'] - $first_values[3];
                $gap_usia = $row['usia'] - $first_values[4];
            
                $map_gap = []; // Inisialisasi $map_gap sebagai array kosong
            
                foreach ([$gap_rp, $gap_rc, $gap_bmi, $gap_tujuan, $gap_usia] as $gap) {
                    if (isset($gap_dan_bobot[(string)$gap])) {
                        $map_gap[] = $gap_dan_bobot[(string)$gap];
                    } else {
                        $map_gap[] = 0; // Default value if gap not found in $gap_dan_bobot
                    }
                }
            
                // Penghitungan nilai akhir dengan bobot
                $weights = [0.15, 0.25, 0.45, 0.05, 0.1];
                $total = 0;
                foreach ($map_gap as $index => $value) {
                    $total += $value * $weights[$index];
                }
            
                // echo "hasil akhir: $total<br>";
                $hasil_akhir_array[] = $total;
                $id_pelatihan_array[] = $row['id_pelatihan'];
            }
   
// Cari nilai yang paling mendekati dengan $nilai_akhir
$nilai_terdekat = $hasil_akhir_array[0];
$id_terdekat = $id_pelatihan_array[0];
foreach ($hasil_akhir_array as $index => $hasil) {
    if (abs($hasil - $nilai_akhir) < abs($nilai_terdekat - $nilai_akhir)) {
        $nilai_terdekat = $hasil;
        $id_terdekat = $id_pelatihan_array[$index];
    }
}

// echo "Nilai yang paling mendekati dengan nilai akhir ($nilai_akhir) adalah: $nilai_terdekat dengan id_pelatihan: $id_terdekat";
         ?>

            <div style="padding: 10px;">
                <span>
                    <p>
                        Hasil perhitungan dengan data biodata dan perbandingan diatas, maka nilai akhir yang didapat
                        yaitu <?php echo $nilai_akhir; ?>.
                        dengan Rekomendasi Program Latihan untuk Tujuan <?php echo $tujuan_latihan; ?> adalah :
                    </p>
                </span>
                <span>
                    <p><?php echo baca_database("","pelatihan","select * from data_pelatihan where id_pelatihan = '$id_terdekat'"); ?>
                    </p>
                </span>
            </div>
        </div>
    </div>
</body>

</html>

<?php 

$id_rekomendasi = id_otomatis("data_rekomendasi", "id_rekomendasi", "10");
              $tanggal=date('Y-m-d');
            $id_member=$id_member;
              $tanggal_lahir=baca_database("","tanggal_lahir","select * from data_member where id_member = '$id_member'");
              $umur=xss($_POST['umur']);
              $tinggi_badan=xss($_POST['tinggi_badan']);
              $berat_badan=xss($_POST['berat_badan']);
              $bmi= number_format($bmi, 2);
              $bmr=number_format($bmr, 2);
              $kategori_tubuh=xss($body_category);
              $tujuan_latihan=xss($tujuan_latihan);
              $id_pelatihan=$id_terdekat;
              $nilai=$nilai_akhir;

              $query = mysql_query("insert into data_rekomendasi values (
                '$id_rekomendasi'
                 ,'$tanggal'
                 ,'$id_member'
                 ,'$tanggal_lahir'
                 ,'$umur'
                 ,'$tinggi_badan'
                 ,'$berat_badan'
                 ,'$bmi'
                 ,'$bmr'
                 ,'$kategori_tubuh'
                 ,'$tujuan_latihan'
                 ,'$id_pelatihan'
                 ,'$nilai'                
                )");

?>

<?php }  ?>




<!-- start cara perhitungan 2 -->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     .card {
        border: 1px solid #ccc;
        border-radius: 8px;
	border-collapse: collapse; // agar tidak ada pemisah antar kolom dan baris
        padding: 16px;
        margin: 16px;
        max-width: 100%;
        background-color: white;
	box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adjust the values as needed */
        }

        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        tr > th {
            border: 1px solid black;
        }

        tr > td {
            border: 1px solid black;
        }
</style>
<body>

<?php /*

    $nama_lengkap = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $umur = $_POST['umur'];    

    if ($umur >= 19 && $umur <= 39) {
        $nilai_umur = 0;
    } elseif ($umur >= 40 && $umur <= 50) {
        $nilai_umur = 1;
    }

    $nilai_tujuan_latihan = $_POST['tujuan_latihan'];    

    if ($nilai_tujuan_latihan == 1) {
        $tujuan_latihan = 'Turun BB (Strength)';
    } elseif ($nilai_tujuan_latihan == 2) {
        $tujuan_latihan = 'Tambah massa otot (Hyperthropy)';
    } elseif ($nilai_tujuan_latihan == 3) {
        $tujuan_latihan = 'Tambah Kekuatan (Endurance)';
    }

    $nilai_riwayat_cedera = $_POST['riwayat_cedera'];    

    if ($nilai_riwayat_cedera == 0) {
        $riwayat_cedera = 'Normal';
    } elseif ($nilai_riwayat_cedera == 1) {
        $riwayat_cedera = 'Terkilir';
    } elseif ($nilai_riwayat_cedera == 2) {
        $riwayat_cedera = 'Operasi';
    } elseif ($nilai_riwayat_cedera == 3) {
        $riwayat_cedera = 'Cedera>1';
    }

    $nilai_riwayat_penyakit = $_POST['riwayat_penyakit'];    

    if ($nilai_riwayat_penyakit == 0) {
        $riwayat_penyakit = 'Normal';
    } elseif ($nilai_riwayat_penyakit == 1) {
        $riwayat_penyakit = 'Asma';
    } elseif ($nilai_riwayat_penyakit == 2) {
        $riwayat_penyakit = 'Hipertensi';
    } elseif ($nilai_riwayat_penyakit == 3) {
        $riwayat_penyakit = 'Jantung';
    } elseif ($nilai_riwayat_penyakit == 4) {
        $riwayat_penyakit = 'Penyakit>1';
    }

$members = [
    [
        'nama' => 'Ridho',
        'jenis_kelamin' => 'Laki-laki',
        'berat_badan' => 60,
        'tinggi_badan' => 178,
        'usia' => 22,
        'riwayat_penyakit' => 'Normal',
        'riwayat_cedera' => 'Normal',
        'bmi' => 18.94,
        'tujuan' => 'Kekuatan'
    ]
];

function calculateBMI($weight, $height) {
    return $weight / (($height / 100) ** 2);
}

function calculateBMR($weight, $height, $age, $gender) {
    if ($gender == 'laki-laki') {
        return 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    } else {
        return 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age);
    }
}

function determineBodyCategory($bmi) {
    if ($bmi < 18.5) return 'Underweight';
    if ($bmi >= 18.5 && $bmi <= 24.9) return 'Normal weight';
    if ($bmi >= 25 && $bmi <= 29.9) return 'Overweight';
    if ($bmi >= 30) return 'Obese';
}

$bmi = calculateBMI($berat_badan, $tinggi_badan);

if ($bmi < 18.5) {
    $nilai_bmi = 0;
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
    $nilai_bmi = 1;
} elseif ($bmi >= 25 && $bmi <= 29.9) {
    $nilai_bmi = 2;
} elseif ($bmi >= 30) {
    $nilai_bmi = 3;
}

$bmr = calculateBMR($berat_badan, $tinggi_badan, $umur, $jenis_kelamin);
$body_category = determineBodyCategory($bmi); */
?>

    <div class="container">
        <div class="card">
            
            <div style="margin: 10px; border-bottom: 1px solid black;">
                <h1 style="margin-bottom: 8px;">Hasil Perhitungan :</h1>                
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>Nama : <?php echo $nama_lengkap; ?></p>
                    <p>Jenis Kelamin : <?php echo $jenis_kelamin; ?></p>
                    <p>Berat Badan : <?php echo $berat_badan; ?> Kg</p>
                    <p>Tinggi Badan : <?php echo $tinggi_badan; ?> cm</p>
                    <p>Usia : <?php echo $umur; ?> tahun</p>
                </span>
            </div>            
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>BMI (Body Mass Index) = <?php echo number_format($bmi, 2); ?></p>
                    <p>BMR (Basal Metabolic Rate) = <?php echo number_format($bmr, 2); ?></p>
                    <p>Kategori Tubuh = <?php echo $body_category; ?></p>
                    <p>Tujuan Latihan = <?php echo $tujuan_latihan; ?></p>                    
                    <p>Riwayat Cedera = <?php echo $riwayat_cedera; ?></p>                    
                    <p>Riwayat Penyakit = <?php echo $riwayat_penyakit; ?></p>                    
                </span>
            </div>
            </div>

         <?php /*
      $gap_dan_bobot = array(
        '0' => '6',
        '1' => '5.5',
        '-1' => '5',
        '2' => '4.5',
        '-2' => '4',
        '3' => '3.5',
        '-3' => '3',
        '4' => '2.5',
        '-4' => '2',
        '5' => '1.5',
        '-5' => '1'
    );
    

             $gap_rp = $nilai_riwayat_penyakit - 5; 
            $gap_rc = $nilai_riwayat_cedera - 4; 
            $gap_bmi = $nilai_bmi - 3;
            $gap_umur = $nilai_tujuan_latihan - 2;        
            $gap_tujuan = $nilai_umur - 1;                

            foreach ($gap_dan_bobot as $key => $value) {

                // map gap adalah bobot dari gap itu sendiri
                if ($gap_rp == $key) {
                    $map_gap_rp = $value;
                }
                if ($gap_rc == $key) {
                    $map_gap_rc = $value;
                }
                if ($gap_bmi == $key) {
                    $map_gap_bmi = $value;
                }
                if ($gap_umur == $key) {
                    $map_gap_umur = $value;
                }
                if ($gap_tujuan == $key) {
                    $map_gap_tujuan = $value;
                }
            }

            // nilai akhir didapat dari perkalian dan penambahan dari nilai kriteria map di kali dengan bobot profil kriteria            
            // $nilai_akhir = ($map_gap_rp * 0.15) + ($map_gap_rc * 0.25) + ($map_gap_bmi * 0.45) + ($map_gap_umur * 0.05) + ($map_gap_tujuan * 0.1);
            
            
            
            $data_repatisi = array(
                '1-4' => array(
                    array('0', '0', '0', '1', '0'),
                    array('1', '1', '1', '2', '1'),
                    array('2', '2', '2', '3', '0'),
                    array('3', '3', '3', '1', '1'),
                    array('4', '0', '0', '2', '0')
                ),
                '8-12' => array(
                    array('0', '0', '0', '1', '1'),
                    array('1', '1', '1', '2', '0'),
                    array('2', '2', '2', '3', '1'),
                    array('3', '3', '3', '1', '0'),
                    array('4', '0', '0', '2', '1')
                ),
                '12-25' => array(
                    array('0', '0', '0', '1', '0'),
                    array('1', '1', '1', '2', '1'),
                    array('2', '2', '2', '3', '0'),
                    array('3', '3', '3', '1', '1'),
                    array('4', '0', '0', '2', '0')
                )
            );

            $gap_dan_bobot = array(
                '0' => '6',
                '1' => '5.5',
                '-1' => '5',
                '2' => '4.5',
                '-2' => '4',
                '3' => '3.5',
                '-3' => '3',
                '4' => '2.5',
                '-4' => '2',
                '5' => '1.5',
                '-5' => '1'
            );              
            
            $first_values = array(5, 4, 3, 2, 1);
            $nilai_akhir = 3.45;
            $hasil_akhir_array = []; // Array untuk menyimpan hasil akhir
            
            foreach ($data_repatisi as $key => $sub_array) {
                foreach ($sub_array as $value) {
                    $map_gap = []; // Inisialisasi $map_gap sebagai array kosong
                    
                    // Hitung nilai gap
                    $nilai_gap = [];
                    for ($i = 0; $i < count($value); $i++) {
                        $nilai_gap[] = $value[$i] - $first_values[$i];
                    }
            
                    // Ubah nilai gap menjadi bobot
                    foreach ($nilai_gap as $nilaigap) {
                        foreach ($gap_dan_bobot as $key => $valuee) {
                            if ($nilaigap == $key) {
                                $map_gap[] = $valuee;
                            }
                        }
                    }
            
                    // Hitung total bobot
                    $weights = [0.15, 0.25, 0.45, 0.05, 0.1];
                    $total = 0;
                    foreach ($map_gap as $value) {
                        $total += $value * array_shift($weights); // Ambil bobot pertama dari array $weights
                    }
            
                    echo "hasil akhir: $total<br>";
                    $hasil_akhir_array[] = $total;
                }
                echo "<br>";
            }           
            
// Cari nilai yang paling mendekati dengan $nilai_akhir
$nilai_terdekat = $hasil_akhir_array[0];
foreach ($hasil_akhir_array as $hasil) {
    if (abs($hasil - $nilai_akhir) < abs($nilai_terdekat - $nilai_akhir)) {
        $nilai_terdekat = $hasil;
    }
}

echo "Nilai yang paling mendekati dengan nilai akhir ($nilai_akhir) adalah: $nilai_terdekat"; */
         ?>
           
           
        </div>
    </div>
</body>
</html> -->

<!-- last cara perhitungan 2 -->
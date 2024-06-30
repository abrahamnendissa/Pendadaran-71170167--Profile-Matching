<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .card {
        border: 1px solid #ccc;
        border-radius: 8px;
        border-collapse: collapse; // agar tidak ada pemisah antar kolom dan baris
        padding: 16px;
        margin: 16px;
        max-width: 100%;
        background-color: white;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Adjust the values as needed */
    }

    .cardd {
        border: 1px solid #ccc;
        /* border-radius: 8px; */
        border-collapse: collapse; // agar tidak ada pemisah antar kolom dan baris
        padding: 16px;
        margin: 16px;
        max-width: 100%;
        background-color: white;
        /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
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
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="cardd" style="padding: 10px;">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Biodata</th>
                        <th>Tujuan</th>
                        <th>Repetisi</th>
                        <th>Hasil Rekomendasi</th>
                    </tr>
                    <tbody>
                        <?php 
                        $id_member = decrypt($_COOKIE['kodene']);
                        $no = 0;
                        $sql = "select * from data_rekomendasi where id_member = '$id_member'"; 
                        $result = mysql_query($sql);
                        while ($data = mysql_fetch_array($result)) {

                        ?>
                        <tr>
                            <td><?php echo $no += 1; ?></td>
                            <td><?php echo date('Y F d', strtotime($data['tanggal'])); ?></td>
                            <td>
                                <span>
                                    <p>JK :
                                        <?php echo baca_database("","jenis_kelamin","select * from data_member where id_member = '$id_member'"); ?>
                                    </p>
                                    <p>Tgl Lahir : <?php echo date('Y F d', strtotime($data['tanggal_lahir'])); ?></p>
                                    <p>Umur : <?php echo $data['umur']; ?> Tahun</p>
                                    <p>Tinggi Badan : <?php echo $data['tinggi_badan']; ?> cm</p>
                                    <p>Berat Badan : <?php echo $data['berat_badan']; ?> kg</p>
                                </span>
                            </td>
                            <td>
                                <span>
                                    <p><?php echo $data['tujuan_latihan']; ?></p>
                                </span>
                            </td>
                            <td><span>
                                    <p><?php echo baca_database("","repatisi","select * from data_pelatihan where id_pelatihan =  '$data[id_pelatihan]'"); ?>
                                    </p>
                                </span></td>
                            <td>
                                <span>
                                    <p>BMI: <?php echo $data['bmi']; ?></p>
                                    <p>BMR:<?php echo $data['bmr']; ?></p>
                                    <p>Kategori Tubuh: <?php echo $data['kategori_tubuh']; ?></p>
                                    <p>Nilai: <?php echo $data['nilai']; ?></p>
                                    <p>Program Latihan:</p>
                                    <p><?php echo baca_database("","pelatihan","select * from data_pelatihan where id_pelatihan = '$data[id_pelatihan]'"); ?>
                                    </p>

                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
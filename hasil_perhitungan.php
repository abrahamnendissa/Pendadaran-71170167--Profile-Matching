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
    <div class="container">
        <div class="card">
            
            <div style="margin: 10px; border-bottom: 1px solid black;">
                <h1 style="margin-bottom: 8px;">Hasil Perhitungan :</h1>                
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>Nama : Janu</p>
                    <p>Jenis Kelamin : Laki-laki</p>
                    <p>Berat Badan : 66 Kg</p>
                    <p>Tinggi Badan : 178 cm</p>
                    <p>Usia : 22 tahun</p>
                </span>
            </div>            
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>BMI (Body Mass Index) = 20.83</p>
                    <p>BMR (Basal Metabolic Rate) = 1701.89</p>
                    <p>Kategori Tubuh = Berat badan normal</p>
                    <p>Tujuan Latihan = Kekuatan (Strength)</p>                    
                </span>
            </div>
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px;">
            <h6>Rekomendasi</h6>
            <table class="table">
                <tr>
                    <th>ALTERNATIF</th>
                    <th>INTENSITAS LATIHAN</th>
                    <th>VARIASI LATIHAN</th>
                    <th>DURASI LATIHAN</th>
                    <th>RIWAYAT CIDERA</th>
                    <th>RIWAYAT PENYAKIT</th>
                    <th>NILAI</th>
                </tr>
                <tbody>
                    <tr>
                        <td>Bobot Prioritas</td>
                        <td>0.2851</td>
                        <td>0.2185</td>
                        <td>0.1532</td>
                        <td>0.2318</td>
                        <td>0.1113</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>A1- Program Latihan 1</td>
                        <td>0.5889</td>
                        <td>0.5571</td>
                        <td>0.4071</td>
                        <td>0.4924</td>
                        <td>0.6197</td>
                        <td>0.53510039</td>
                    </tr>
                    <tr>
                        <td>A2- Program Latihan 2</td>
                        <td>0.2518</td>
                        <td>0.3202</td>
                        <td>0.3286</td>
                        <td>0.3962</td>
                        <td>0.2243</td>
                        <td>0.30889715</td>
                    </tr>
                    <tr>
                        <td>A3- Program Latihan 3</td>
                        <td>0.1593</td>
                        <td>0.1226</td>
                        <td>0.2643</td>
                        <td>0.1115</td>
                        <td>0.156</td>
                        <td>0.15590379</td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>Hasil perhitungan dengan data biodata dan perbandingan diatas, maka nilai terbesar yaitu 0.6120.</p>
                    <p>dengan Rekomendasi Program Latihan untuk Tujuan kekuatan (Strength) adalah :</p>
                    <p>**Sesi Latihan 1: Full Body**</p>                                        
                </span>
            </div>            
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>1. **Back Squats.**</p>                    
                    <p></p>                    
                    <p>-4 set x 6-8 repitisi.</p>
                </span>
            </div>            
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>2. **Bench Press.**</p>                    
                    <p></p>                    
                    <p>-4 set x 6-8 repitisi.</p>
                </span>
            </div>            
            </div>
            <div style="margin-bottom: 50px;">
            <div style="margin: 10px; font-weight: 600;">
                <span>
                    <p>**Catatan.**</p>
                    <p>-Pemanasan dan pendinginan tetap penting sebelum dan setelah setiap sesi latihan.</p>                                            
                    <p>-Pastikan untuk menggunakan beban yang memungkinkan untuk menjaga teknik yang benar.</p>                                            
                    <p>-Istirahat antara set sekitar 60-90 detik.</p>                                            
                    <p>-Program ini memberikan variasi antara latihan kekuatan, kardio, dan pemulihan aktif.</p>                                            
                    <p>-Penting untuk mendengarkan tubuh dan memberikan waktu istirahat yang cukup antara sesi latihan.</p>                                            
                </span>
            </div>            
            <div style="margin: 10px; font-weight: 600;">
            <button class="btn btn-primary">kembali</button>
            </div>            
            </div>
        </div>
    </div>
</body>
</html>
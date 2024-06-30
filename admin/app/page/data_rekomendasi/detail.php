
<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI'); ?>
</a>

<br><br>

<div class="content-box">
    <div class="content-box-content">
        <table <?php tabel_in(100, '%', 0, 'center'); ?>>		
            <tbody>
               
                <?php
                if (!isset($_GET['proses'])) {
                        
                    ?>
                <script>
                    alert("AKSES DITOLAK");
                    location.href = "index.php";
                </script>
                <?php
                die();
            }
            $proses = decrypt(mysql_real_escape_string($_GET['proses']));
            $sql = mysql_query("SELECT * FROM data_rekomendasi where id_rekomendasi = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Penilaian Individu </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_rekomendasi']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Tanggal </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tanggal']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">id member </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_member']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">tanggal lahir </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tanggal_lahir']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">umur </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['umur']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">tinggi badan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tinggi_badan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">berat badan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['berat_badan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">bmi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['bmi']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">bmr </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['bmr']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">kategori tubuh </td>
                <td class="clleft" width="2%">:</td>
            <td class="clleft"><?php echo $data['kategori_tubuh']; ?></td>
            </tr>
            
            <tr>
                <td class="clleft" width="25%">tujuan latihan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tujuan latihan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">id pelatihan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_pelatihan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">nilai </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['nilai']; ?></td>
            </tr>


            </tbody>
        </table>
    </div>
</div>

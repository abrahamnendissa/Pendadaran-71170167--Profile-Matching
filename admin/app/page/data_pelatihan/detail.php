
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
            $sql = mysql_query("SELECT * FROM data_pelatihan where id_pelatihan = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Penilaian Program </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_pelatihan']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Repatisi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['repatisi']; ?></td>
            </tr>
        
            <tr>
                <td class="clleft" width="25%">Bobot rp </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['rp']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Bobot rc </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['rc']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Bobot bmi </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['bmi']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Bobot tujuan latihan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tujuan']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Bobot usia </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['usia']; ?></td>
            </tr>

            <tr>
                <td class="clleft" width="25%">Pelatihan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['pelatihan']; ?></td>
            </tr>



            </tbody>
        </table>
    </div>
</div>


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
            $sql = mysql_query("SELECT * FROM data_member where id_member = '$proses'");
            $data = mysql_fetch_array($sql);
            ?>
           <!--h
            <tr>
                <td class="clleft" width="25%">Id Member </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['id_member']; ?></td>	
            </tr>
           h-->

            <tr>
                <td class="clleft" width="25%">Nama </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['nama']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Jenis Kelamin </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Tanggal Lahir </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo format_indo($data['tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Tinggi Badan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tinggi_badan']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Berat Badan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['berat_badan']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Alamat </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['alamat']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Email </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['email']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Nomor Telepon </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['nomor_telepon']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Tingak Kebugaran </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['tingak_kebugaran']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Preferensi Pelatihan </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['preferensi_pelatihan']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Username </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['username']; ?></td>
            </tr>
            <tr>
                <td class="clleft" width="25%">Password </td>
                <td class="clleft" width="2%">:</td>
                <td class="clleft"><?php echo $data['password']; ?></td>
            </tr>




            </tbody>
        </table>
    </div>
</div>

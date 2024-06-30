
<a href="<?php index(); ?>">
    <?php btn_kembali(' KEMBALI KE HALAMAN SEBELUMNYA'); ?>
</a>

    <div class="col-sm-12" style="margin-bottom: 20px; margin-top: 20px;">
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <strong>Edit Data rekomendasi </strong>
        <hr class="message-inner-separator">
            <p>Silahkan Update Data rekomendasi  dibawah ini.</p>
        </div>
    </div>


<div class="content-box">
    <form action="proses_update.php"  enctype="multipart/form-data"  method="post">
        <div class="content-box-content">
            <div id="postcustom">	
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
                    $sql = mysql_query("SELECT * FROM dasta_rekomendasi where id_rekomendasi = '$proses'");
                    $data = mysql_fetch_array($sql);
                    ?>
                    <!--h
                    <tr>
                        <td width="25%" class="leftrowcms">					
                            <label >Id Penilaian Individu  <font color="red">*</font></label>
                        </td>
                        <td width="2%">:</td>
                        <td>
                           <?php echo $data['id_rekomendasi']; ?>	
                        </td>
                    </tr>
                    h-->
                    <input type="hidden" class="form-control" name="id_rekomendasi" value="<?php echo $data['id_rekomendasi']; ?>" readonly  id="id_rekomendasi" required="required">
                         
                          <tr>
                            <td width="25%" class="leftrowcms">
                                <label >tanggal  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="tanggal" id="tanggal" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['tanggal']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >id member  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="id_member" id="id_member" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['id_member']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >tanggal lahir  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="tanggal_lahir" id="tanggal_lahir" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['tanggal_lahir']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >umur  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="umur" id="umur" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['umur']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >tinggi badan  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="tinggi_badan" id="tinggi_badan" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['tinggi_badan']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >berat bada  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="berat_badan" id="berat_badan" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['berat_badan']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >bmi  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="bmi" id="bmi" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['bmi']); ?>">
                            </td>
                        </tr>
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >bmr  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="bmr" id="bmr" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['bmr']); ?>">
                            </td>
                        </tr>

                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >kategori_tubuh  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="kategori_tubuh" id="kategori_tubuh" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['kategori_tubuh']); ?>">
                            </td>
                        </tr>

                        
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >tujuan_latihan  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="tujuan_latihan" id="tujuan_latihan" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['tujuan_latihan']); ?>">
                            </td>
                        </tr>

                        
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >id_pelatihan  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="id_pelatihan" id="id_pelatihan" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['id_pelatihan']); ?>">
                            </td>
                        </tr>
                        
                        <tr>
                            <td width="25%" class="leftrowcms">
                                <label >nilai  <span class="highlight"></span></label>
                            </td>
                            <td width="2%">:</td>
                            <td>
                                <input  class="form-control" style="width:50%" type="varchar" name="nilai" id="nilai" placeholder="Nilai Penilaian " required="required" value="<?php echo ($data['nilai']); ?>">
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
                <div class="content-box-content">
                    <center>
                        <?php btn_update(' PROSES UPDATE DATA'); ?>
                    </center>
                </div>		
            </div>
        </div>
    </form>

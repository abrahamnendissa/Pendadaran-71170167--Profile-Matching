
<body>
    <a href="<?php index(); ?>?input=tambah">
        <?php //btn_tambah('Tambah Data'); ?>
    </a>

    <a target="blank" href="cetak.php?berdasarkan=data_rekomendasi&jenis=xls&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
        <?php btn_export('Export Excel'); ?>
    </a>

    <a target="blank" href="cetak.php?berdasarkan=data_rekomendasi&jenis=print&pakaiperperiode=<?php echo $status_pakaiperperiode; ?>">
        <?php btn_cetak('Cetak'); ?>
    </a>

    <a href="<?php index(); ?>">
        <?php btn_refresh('Refresh Data'); ?>
    </a>

    <br><br>

    <form name="formcari" id="formcari" action="" method="get">
        <fieldset> 
            <table>
                <tbody>
                    <tr>
                        <td>Berdasarkan</td>	
                        <td>:</td>	
                        <td>
                            <!-- <input value="" name="Berdasarkan" id="Berdasarkan" > --> 
                            <select class="form-control selectpicker" data-live-search="true" name="Berdasarkan" id="Berdasarkan">
                                <?php
                                $sql = "desc data_rekomendasi";
                                $result = @mysql_query($sql);
                                while ($row = @mysql_fetch_array($result)) {
                                    echo "<option name='berdasarkan' value=$row[0]>$row[0]</option>";
                                }
                                ?>
                            </select>							
                        </td>
                    </tr>

                    <tr>
                        <td>Pencarian</td>	
                        <td>:</td>	
                        <td>							
                                <!--<input class="form-control" type="text" name="isi" value="" >--> <input  type="text" name="isi" value="" >
                            <?php btn_cari('Cari'); ?>
                        </td>
                    </tr>
                </tbody>
            </table>									
        </fieldset>
    </form>

    <div style="overflow-x:auto;">
        <table <?php tabel(100, '%', 1, 'left'); ?> >
            <tr>								  
                <th>Action</th>
                <th>No</th>
                <!--h <th>Id Penilaian Individu </th> h-->
                <th align="center" class="th_border cell"  >tanggal</th>                
                <th align="center" class="th_border cell"  >id_member</th>                
                <th align="center" class="th_border cell"  >tanggal lahir</th>                
                <th align="center" class="th_border cell"  >umur</th>                
                <th align="center" class="th_border cell"  >tinggi badan</th>                
                <th align="center" class="th_border cell"  >berat badan</th>                
                <th align="center" class="th_border cell"  >bmi</th>                
                <th align="center" class="th_border cell"  >bmr</th>                
                <th align="center" class="th_border cell"  >kategori tubuh</th>                
                <th align="center" class="th_border cell"  >tujuan latihan</th>                
                <th align="center" class="th_border cell"  >id pelatihan</th>                
                <th align="center" class="th_border cell"  >nilai</th>    

            </tr>

            <tbody>
                <?php
                $no = 0;
                $startRow = ($page - 1) * $dataPerPage;
                $no = $startRow;

                if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi'])) {
                    $berdasarkan = mysql_real_escape_string($_GET['Berdasarkan']);
                    $isi = mysql_real_escape_string($_GET['isi']);
                    $querytabel = "SELECT * FROM data_rekomendasi where $berdasarkan like '%$isi%'  LIMIT $startRow ,$dataPerPage";
                    $querypagination = "SELECT COUNT(*) AS total FROM data_rekomendasi where $berdasarkan like '%$isi%'";
                } else {
                    $querytabel = "SELECT * FROM data_rekomendasi  LIMIT $startRow ,$dataPerPage";
                    $querypagination = "SELECT COUNT(*) AS total FROM data_rekomendasi";
                }
                $proses = mysql_query($querytabel);
                while ($data = mysql_fetch_array($proses)) {
                    ?>
                    <tr class="event2">	
                        
                        <td class="th_border cell" align="center" width="200">
                            <table border="0">
                                <tr>
                                    <td>
                                        <a href="<?php index(); ?>?input=detail&proses=<?= encrypt($data['id_rekomendasi']); ?>">
                                        <?php btn_detail('Detail'); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php index(); ?>?input=edit&proses=<?= encrypt($data['id_rekomendasi']); ?>">
                                        <?php //btn_edit('Edit'); ?>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="<?php index(); ?>?input=hapus&proses=<?= encrypt($data['id_rekomendasi']); ?>">
                                        <?php btn_hapus('Hapus'); ?>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        
                        <td align="center" width="50"><?php $no = (($no + 1) ); echo $no; ?></td>
                        <!--h <td align="center"><?php echo $data['id_rekomendasi']; ?></td> h-->
                        <td align="center"><?php echo $data['tanggal']; ?></td>
                        <td align="center"><?php echo $data['id_member']; ?></td>
                        <td align="center"><?php echo $data['tanggal_lahir']; ?></td>
                        <td align="center"><?php echo $data['umur']; ?></td>
                        <td align="center"><?php echo $data['tinggi_badan']; ?></td>
                        <td align="center"><?php echo $data['berat_badan']; ?></td>
                        <td align="center"><?php echo $data['bmi']; ?></td>
                        <td align="center"><?php echo $data['bmr']; ?></td>
                        <td align="center"><?php echo $data['kategori_tubuh']; ?></td>
                        <td align="center"><?php echo $data['tujuan_latihan']; ?></td>
                        <td align="center"><?php echo $data['id_pelatihan']; ?></td>
                        <td align="center"><?php echo $data['nilai']; ?></td>

                    
                    </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

   <?php Pagination($page, $dataPerPage, $querypagination); ?>

</body>

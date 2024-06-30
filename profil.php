<?php if(empty($p)) { header("Location: index.php?p=home"); die(); } ?>
<?php
    // $id_member = decrypt($_COOKIE['kodene']);
    $sql = "select * from data_profil order by id_profil desc limit 1";
    $result = mysql_query($sql);
    $data = mysql_fetch_array($result);
    ?>
<div
    id="about-us"
    class="container-fluid fh5co-about-us pl-0 pr-0 parallax-window">
    <div class="container" style="margin: 10px;">
        <div class="about-info">

            <div class="row">
                <div class="col-md-6 about-grids">
                    <br>
                    <img style="width:50%" src="admin/upload/<?php echo $data['gambar']; ?>" alt="">
                </div>
                <div class="col-md-6 about-grids">
                    <br>
                    <h2 class="wow bounceInLeft"><?php echo strtoupper($data['nama']); ?></h2>
                    <hr>
                    <p>Alamat :
                        <?php echo strtoupper($data['alamat']); ?></p>
                    <br>
                    <p>No Telepon :
                        <?php echo strtoupper($data['nomor_telepon']); ?></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<?php if(empty($p)) { header("Location: index.php?=home"); die(); } ?>

<br>
<center>
    <h2>
        GALERY
    </h2>
</center>
<br>

<?php galery("data_galery","id_galery","judul","foto","keterangan");?>
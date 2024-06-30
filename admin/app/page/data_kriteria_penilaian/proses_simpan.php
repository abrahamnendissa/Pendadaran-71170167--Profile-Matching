<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_kriteria_penilaian'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}


$id_kriteria_penilaian = id_otomatis("data_kriteria_penilaian", "id_kriteria_penilaian", "10");
              $nama_kriteria=xss($_POST['nama_kriteria']);
              $bobot_kriteria=xss($_POST['bobot_kriteria']);


$query = mysql_query("insert into data_kriteria_penilaian values (
'$id_kriteria_penilaian'
 ,'$nama_kriteria'
 ,'$bobot_kriteria'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

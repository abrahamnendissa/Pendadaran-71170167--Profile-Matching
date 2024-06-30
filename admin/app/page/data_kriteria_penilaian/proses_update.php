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

$id_kriteria_penilaian = xss($_POST['id_kriteria_penilaian']);
$nama_kriteria = xss($_POST['nama_kriteria']);
$bobot_kriteria = xss($_POST['bobot_kriteria']);


$query = mysql_query("update data_kriteria_penilaian set 
nama_kriteria='$nama_kriteria',
bobot_kriteria='$bobot_kriteria'

where id_kriteria_penilaian='$id_kriteria_penilaian' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

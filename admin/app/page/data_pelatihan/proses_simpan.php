<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_pelatihan'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}


$id_pelatihan = id_otomatis("data_pelatihan", "id_pelatihan", "10");
              $rp=xss($_POST['rp']);
              $rc=xss($_POST['rc']);
              $bmi=xss($_POST['bmi']);
              $tujuan=xss($_POST['tujuan']);
              $usia=xss($_POST['usia']);
              $pelatihan=xss($_POST['pelatihan']);

$query = mysql_query("insert into data_pelatihan values (
'$id_pelatihan'
 ,'$rp'
 ,'$rc'
 ,'$bmi'
 ,'$tujuan'
 ,'$usia'
 ,'$pelatihan'
)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

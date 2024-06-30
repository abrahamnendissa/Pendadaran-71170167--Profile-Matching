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
            $id_pelatihan=xss($_POST['id_pelatihan']);
              $rp=xss($_POST['rp']);
              $rc=xss($_POST['rc']);
              $bmi=xss($_POST['bmi']);
              $tujuan=xss($_POST['tujuan']);
              $usia=xss($_POST['usia']);
              $pelatihan=$_POST['pelatihan'];


$query = mysql_query("update data_pelatihan set 
rp='$rp',
rc='$rc',
bmi='$bmi',
tujuan='$tujuan',
usia='$usia',
pelatihan='$pelatihan'

where id_pelatihan='$id_pelatihan' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

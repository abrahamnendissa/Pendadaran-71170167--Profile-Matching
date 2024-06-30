<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_rekomendasi'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}
$id_rekomendasi=xss($_POST['id_rekomendasi']);
              $tanggal=xss($_POST['tanggal']);
              $id_member=xss($_POST['id_member']);
              $tanggal_lahir=xss($_POST['tanggal_lahir']);
              $umur=xss($_POST['umur']);
              $tinggi_badan=xss($_POST['tinggi_badan']);
              $berat_badan=xss($_POST['berat_badan']);
              $bmi=xss($_POST['bmi']);
              $bmr=xss($_POST['bmr']);
              $kategori_tubuh=xss($_POST['kategori_tubuh']);
              $tujuan_latihan=xss($_POST['tujuan_latihan']);
              $id_pelatihan=xss($_POST['id_pelatihan']);
              $nilai=xss($_POST['nilai']);


$query = mysql_query("update data_rekomendasi set 
tanggal='$tanggal',
id_member='$id_member',
tanggal_lahir='$tanggal_lahir',
umur='$umur',
tinggi_badan='$tinggi_badan',
berat_badan='$berat_badan',
bmi='$bmi',
bmr='$bmr',
kategori_tubuh='$kategori_tubuh',
tujuan_latihan='$tujuan_latihan',
id_pelatihan='$id_pelatihan',
nilai='$nilai'



where id_rekomendasi='$id_rekomendasi' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

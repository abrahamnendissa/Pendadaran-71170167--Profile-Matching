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


$id_rekomendasi = id_otomatis("data_rekomendasi", "id_rekomendasi", "10");
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


$query = mysql_query("insert into data_rekomendasi values (
'$id_rekomendasi'
 ,'$tanggal'
 ,'$id_member'
 ,'$tanggal_lahir'
 ,'$umur'
 ,'$tinggi_badan'
 ,'$berat_badan'
 ,'$bmi'
 ,'$bmr'
 ,'$kategori_tubuh'
 ,'$tujuan_latihan'
 ,'$id_pelatihan'
 ,'$nilai'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

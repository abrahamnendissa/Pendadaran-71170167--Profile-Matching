<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_program_pelatihan'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}


$id_program_pelatihan = id_otomatis("data_program_pelatihan", "id_program_pelatihan", "10");
              $nama_program=xss($_POST['nama_program']);
              $deskripsi_program=xss($_POST['deskripsi_program']);
              $durasi_program=xss($_POST['durasi_program']);
              $intensitas_latihan=xss($_POST['intensitas_latihan']);
              $jenis_latihan=xss($_POST['jenis_latihan']);
              $tartget_utama_program=xss($_POST['tartget_utama_program']);


$query = mysql_query("insert into data_program_pelatihan values (
'$id_program_pelatihan'
 ,'$nama_program'
 ,'$deskripsi_program'
 ,'$durasi_program'
 ,'$intensitas_latihan'
 ,'$jenis_latihan'
 ,'$tartget_utama_program'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

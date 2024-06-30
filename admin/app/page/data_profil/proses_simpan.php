<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_profil'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}


$id_profil = id_otomatis("data_profil", "id_profil", "10");
              $nama=xss($_POST['nama']);
              $alamat=xss($_POST['alamat']);
              $email=xss($_POST['email']);
              $nomor_telepon=xss($_POST['nomor_telepon']);
              $gambar=upload('gambar');


$query = mysql_query("insert into data_profil values (
'$id_profil'
 ,'$nama'
 ,'$alamat'
 ,'$email'
 ,'$nomor_telepon'
 ,'$gambar'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

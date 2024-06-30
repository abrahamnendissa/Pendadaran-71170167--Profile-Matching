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

$id_profil = xss($_POST['id_profil']);
$nama = xss($_POST['nama']);
$alamat = xss($_POST['alamat']);
$email = xss($_POST['email']);
$nomor_telepon = xss($_POST['nomor_telepon']);
$gambar=($_FILES['gambar']['name']); if (empty($gambar)){$gambar = $_POST['gambar1'];} else { $gambar = upload('gambar');};


$query = mysql_query("update data_profil set 
nama='$nama',
alamat='$alamat',
email='$email',
nomor_telepon='$nomor_telepon',
gambar='$gambar'

where id_profil='$id_profil' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

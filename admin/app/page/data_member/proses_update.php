<?php
include '../../../include/all_include.php';

if (!isset($_POST['id_member'])) {
        
    ?>
    <script>
        alert("AKSES DITOLAK");
        location.href = "index.php";
    </script>
    <?php
    die();
}

$id_member = xss($_POST['id_member']);
$nama = xss($_POST['nama']);
$jenis_kelamin = xss($_POST['jenis_kelamin']);
$tanggal_lahir = xss($_POST['tanggal_lahir']);
$tinggi_badan = xss($_POST['tinggi_badan']);
$berat_badan = xss($_POST['berat_badan']);
$alamat = xss($_POST['alamat']);
$email = xss($_POST['email']);
$nomor_telepon = xss($_POST['nomor_telepon']);
$tingak_kebugaran = xss($_POST['tingak_kebugaran']);
$preferensi_pelatihan = xss($_POST['preferensi_pelatihan']);
$username = xss($_POST['username']);
$password = md5($_POST['password']);


$query = mysql_query("update data_member set 
nama='$nama',
jenis_kelamin='$jenis_kelamin',
tanggal_lahir='$tanggal_lahir',
tinggi_badan='$tinggi_badan',
berat_badan='$berat_badan',
alamat='$alamat',
email='$email',
nomor_telepon='$nomor_telepon',
tingak_kebugaran='$tingak_kebugaran',
preferensi_pelatihan='$preferensi_pelatihan',
username='$username',
password='$password'

where id_member='$id_member' ") or die(mysql_error());

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_edit";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

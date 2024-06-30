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


$id_member = id_otomatis("data_member", "id_member", "10");
              $nama=xss($_POST['nama']);
              $jenis_kelamin=xss($_POST['jenis_kelamin']);
              $tanggal_lahir=xss($_POST['tanggal_lahir']);
              $tinggi_badan=xss($_POST['tinggi_badan']);
              $berat_badan=xss($_POST['berat_badan']);
              $alamat=xss($_POST['alamat']);
              $email=xss($_POST['email']);
              $nomor_telepon=xss($_POST['nomor_telepon']);
              $tingak_kebugaran=xss($_POST['tingak_kebugaran']);
              $preferensi_pelatihan=xss($_POST['preferensi_pelatihan']);
              $username=xss($_POST['username']);
              $password=md5($_POST['password']);


$query = mysql_query("insert into data_member values (
'$id_member'
 ,'$nama'
 ,'$jenis_kelamin'
 ,'$tanggal_lahir'
 ,'$tinggi_badan'
 ,'$berat_badan'
 ,'$alamat'
 ,'$email'
 ,'$nomor_telepon'
 ,'$tingak_kebugaran'
 ,'$preferensi_pelatihan'
 ,'$username'
 ,'$password'

)");

if ($query) {
    ?>
    <script>location.href = "<?php index(); ?>?input=popup_tambah";</script>
    <?php
} else {
    echo "GAGAL DIPROSES";
}
?>

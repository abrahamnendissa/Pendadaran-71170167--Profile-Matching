<?php
function daftar(){
?>
<br>
<center><h2> DAFTAR  </h2></center>
<br>

<div class="container">
<div class="col-md-12">
<div class="col-md-2">
</div>
<div class="col-md-8">
<center>
Sudah Memiliki akun Silahkan login 
<br><a href="index.php?p=login" class="btn btn-danger">Halaman Login</a>
</center>
<br>
<?php 

//KODE OTOMATIS	 	
function autonumber($id_terakhir, $panjang_kode, $panjang_angka) {
	$kode = substr($id_terakhir, 0, $panjang_kode);
	$angka = substr($id_terakhir, $panjang_kode, $panjang_angka);
	$angka_baru = str_repeat("0", $panjang_angka - strlen($angka+1)).($angka+1);
	$id_baru = $kode.$angka_baru;
	return $id_baru;
}
global $con_mysqli;
$cek = mysqli_query($con_mysqli,"SELECT * FROM data_member");
$rowcek = mysqli_num_rows($cek);
if ($rowcek > 0) {
	$id_member = mysqli_query($con_mysqli,"SELECT max(id_member) as id_member FROM data_member");
	$data_member = mysqli_fetch_array($id_member);
	$id_member_akhir = $data_member['id_member'];
	$id_member_otomatis = autonumber($id_member_akhir, 3, 3); 
	}else{
	$kodedepan = strtoupper('data_member');
	$kodedepan = str_replace("DATA_","",$kodedepan);
	$kodedepan = str_replace("DATA","",$kodedepan);
	$kodedepan = str_replace("TABEL_","",$kodedepan);
	$kodedepan = str_replace("TABEL","",$kodedepan);
	$kodedepan = str_replace("TABLE_","",$kodedepan);
	$kodedepan = strtoupper(substr($kodedepan,0,3));
	$id_member_otomatis = $kodedepan."001";	
}

?>

<form method="post" action="index.php?p=login&action=simpan_daftar">
<table <?php tabel_in(100,'%',0,'center');  ?>>		
	<tbody>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >id&nbsp;member <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="readonly" class="form-control" readonly value="<?php echo $id_member_otomatis;?>" name="id_member" placeholder="id_member" id="id_member" required="required">		
				</td>
			   </tr>
			   
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Nama <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="text"  class="form-control" name="nama" id="nama" placeholder="nama" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Jenis Kelamin <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<select class="form-control" class='ckeditor'   class="form-control" type="textarea" name="jenis_kelamin" id="jenis_kelamin" placeholder="jenis_kelamin" required="required">
				<option value="">-- Pilih --</option>
				<option value="laki-laki">Laki - Laki</option>
				<option value="perempuan">Perempuan</option>
				</select>
				</td>
			   </tr>

			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Tangganl Lahir <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="date"  class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Tinggi Badan (Cm)<span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="text"  class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="tinggi_badan" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Berat Badan (Kg)<span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="text"  class="form-control" name="berat_badan" id="berat_badan" placeholder="berat_badan" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Alamat <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<textarea type="text"  class="form-control" name="alamat" id="alamat" placeholder="alamat" required="required"></textarea>

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Email <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="text"  class="form-control" name="email" id="email" placeholder="email" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Nomor Telepon <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="number"   class="form-control" name="nomor_telepon" id="nomor_telepon" placeholder="nomor_telepon" required="required">

		
				</td>
			   </tr>
			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Username <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="text"   class="form-control" name="username" id="username" placeholder="username" required="required">

		
				</td>
			   </tr>

			   <tr>
				<td width="25%" class="leftrowcms">					
				<label >Password <span class="highlight">*</span></label>
			   </td>
				<td width="2%">:</td>
				<td>
				<input type="password"   class="form-control" name="password" id="password" placeholder="password" required="required">

		
				</td>
			   </tr>
			   
	</tbody>
</table>
<div class="content-box-content">
<center>
<?php btn_simpan(' DAFTAR'); ?>
</center>
</div>		
</form>
</div>
</div>
</div>
<br><br><br><br>
<?php 
}
function simpan_daftar()
{
	if (!isset($_POST['id_member']))
{
	    ?>
	<script>
	alert("AKSES DITOLAK");
	location.href = "index.php";
	</script>
	<?php
	die();
} 
$id_member=$_POST['id_member'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$tinggi_badan=$_POST['tinggi_badan'];
$berat_badan=$_POST['berat_badan'];
$alamat=$_POST['alamat'];
$email= $_POST['email'];
$nomor_telepon= md5($_POST['nomor_telepon']);

$username=$_POST['username'];
$password= md5($_POST['password']);

$query=mysql_query("insert into data_member values (
'$id_member'
 ,'$nama'
 ,'$jenis_kelamin'
 ,'$tanggal_lahir'
 ,'$tinggi_badan'
 ,'$berat_badan'
 ,'$alamat'
 ,'$email'
 ,'$nomor_telepon'
 
 ,''
 ,''
 ,'$username'
 ,'$password'

)");

if($query){
?>
<script>
alert ("PENDAFTARAN BERHASIL, SILAHKAN LOGIN");
location.href = "<?php index(); ?>?p=login"; </script>
<?php
}
else
{
	echo "GAGAL DIPROSES";
}
}
?>
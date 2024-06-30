<?php 
if(empty($p)) { header("Location: index.php?=home"); die(); } 
if (!isset($_GET['action']))
{	
	    berita("data_berita","id_berita","tanggal","judul","foto","isi");
}
else
{
	$action = $_GET['action'];
	if ($action == "detail" || $action == "simpan")
	{
		$proses = $_GET['proses'];
		detail_berita("data_berita","id_berita","tanggal","judul","foto","isi",$proses);
	}
	elseif ($action == "simpan")
	{
		
	}
} ?>

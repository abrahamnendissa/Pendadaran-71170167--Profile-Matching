<?php 
if(empty($p)) { header("Location: index.php?=home"); die(); }
if (!isset($_GET['action']))
{
        login();
}
else
{
    $action = $_GET['action'];
	if ($action=="daftar")
	{
        daftar();
    }  
    else if ($action=="simpan_daftar")
    {
        simpan_daftar();
    }
	else if ($action=="akun")
	{
        akun();
    }
    else
    {
        login();
    }
      
}
?>
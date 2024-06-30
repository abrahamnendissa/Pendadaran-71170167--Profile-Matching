<?php
if (isset($_GET['p']))
{
		if(!empty($_GET['p'])){
			$p = $_GET['p'];
			$lokasi_file = "$p".".php";
			if(file_exists($lokasi_file))
			{
				include "$lokasi_file";
			}
			else
			{
				echo "HALAMAN TIDAK ADA";
			}

		}
		else
		{
			$P="home";
			include "home.php";
			
		}
}
else
{
?>
<script>
    location.href = "index.php?p=home";
</script>
<?php
}
?>
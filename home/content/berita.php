<?php 
function berita($tabel,$id,$tanggal,$judul,$foto,$isi)
{
	if (!(isset($_GET['Go'])))
	{
	?>
	<style>

	@import url(https://fonts.googleapis.com/css?family=Raleway:400,600,700,800);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip1208 {
  font-family: "Raleway", Arial, sans-serif;
  color: #fff;
  position: relative;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  width: 100%;
  background-color: #ffffff;
  color: #000000;
  text-align: left;
  font-size: 16px;
}
	body {
	background-color:#fff8ef;
	}
figure.snip1208 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
figure.snip1208 img {
  max-width: 100%;
  vertical-align: top;
  -webkit-transform-origin: 50% 100%;
  transform-origin: 50% 100%;
  -webkit-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
figure.snip1208 figcaption {
  padding: 25px;
  position: relative;
}
figure.snip1208 .date,
figure.snip1208 i {
  background-color: #1abc9c;
  top: 25px;
  color: #fff;
  left: 25px;
  min-height: 60px;
  min-width: 60px;
  position: absolute;
  text-align: center;
}
figure.snip1208 .date {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
  font-size: 22px;
  font-weight: 700;
  text-transform: uppercase;
}
figure.snip1208 .date span {
  display: block;
  line-height: 30px;
}
figure.snip1208 .date .month {
  font-size: 16px;
  background-color: rgba(0, 0, 0, 0.1);
}
figure.snip1208 i {
  line-height: 60px;
  font-size: 30px;
  -webkit-transform: rotateY(-90deg);
  transform: rotateY(-90deg);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
figure.snip1208 h3,
figure.snip1208 p {
  margin: 0;
  padding: 0;
}
figure.snip1208 h3 {
  margin-bottom: 10px;
  display: inline-block;
  font-weight: 600;
  color: #333333;
  text-transform: uppercase;
}
figure.snip1208 p {
  font-size: 0.8em;
  margin-bottom: 20px;
  line-height: 1.6em;
}
figure.snip1208 button {
  border: medium none;
  padding: 10px 20px;
  background-color: #1abc9c;
  font-weight: 800;
  color: #ffffff;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-size: 0.8em;
}
figure.snip1208 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.snip1208:hover img,
figure.snip1208.hover img {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
figure.snip1208:hover .date,
figure.snip1208.hover .date {
  -webkit-transform: rotateY(90deg);
  transform: rotateY(90deg);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
figure.snip1208:hover i,
figure.snip1208.hover i {
  -webkit-transform: rotateY(0);
  transform: rotateY(0);
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
figure.snip1208:hover button,
figure.snip1208.hover button {
  background-color: #117964;
}

	</style>
	
	
 <div class="row">
 
        <form name="formcari" id="formcari" action="" method="get">
           
                        <input name="p" value="berita" id="page" type="hidden">
                        <input
                            value="<?php echo $judul;?>"
                            type="hidden"
                            name="Berdasarkan"
                            id="Berdasarkan">
 

 <div class="row" style="margin-left:100px; margin-top:50px; display:block; width:100%"> 
 <div class="col-md-8 ">
                                <input style="width:100%" class="form-control" type="text" name="isi" value="">
								</div>
								<div class="col-md-4  "  style="width:100%">
                                <?php
										if (isset($_GET['Berdasarkan']))
										{
											btn_cari('Cari');
											?>
                                <a class="btn btn-primary" style="width:100%" href="index.php?p=berita">
                                    Reset
                                </a>
                            <?php
										}
										else
										{
											?>

                                <?php
											btn_cari('Cari');
											
										}
								?>
                            </div> 
 </div>
        </form>

 </div>
<div class="gallery">
		 <div class="container">
			 <h3>Berita </h3> 
			 <div class="row gallery-info">			
    <?php
				if (isset($_GET['page']) && !empty($_GET['page'])){ $page = (int)$_GET['page']; }
				else { $page = 1; }
				if (isset($_GET['perPage']) && !empty($_GET['perPage'])){ $dataPerPage = (int)$_GET['perPage']; }
				else { $dataPerPage = 12; }
				
				
				$no = 0;
				$startRow=($page-1)*$dataPerPage;
				$no = $startRow;
				
				if (isset($_GET['Berdasarkan']) && !empty($_GET['Berdasarkan']) && isset($_GET['isi']) && !empty($_GET['isi']))
				{
				$berdasarkan = $_GET['Berdasarkan'];
				$isi = $_GET['isi'];
				$querytabel="SELECT * FROM $tabel where $berdasarkan like '%$isi%'  LIMIT $startRow ,$dataPerPage";
				$querypagination="SELECT COUNT(*) AS total FROM $tabel where $berdasarkan like '%$isi%'";
				}
				else
				{
				$querytabel="SELECT * FROM $tabel  LIMIT $startRow ,$dataPerPage";
				$querypagination="SELECT COUNT(*) AS total FROM $tabel";
				}
				$proses = mysql_query($querytabel);
				while ($data = mysql_fetch_array($proses))
				{ ?>
			
			<figure class="snip1208">
  <img src="admin/upload/<?php echo $data["$foto"]; ?>" alt="sample66" />
  <div class="date" style="font-size:14px; padding-left:10px; padding-right:10px; min-height:auto"><span class="day"><?php echo (format_indo($data["$tanggal"])); ?></span> </div><i class="ion-film-marker"></i>
  <figcaption>
    <h3><?php echo strtoupper(substr($data["$judul"],0,200)); ?></h3>
    <p>
     <?php echo (substr($data["$isi"],0,300)); ?>...
    </p>
    <button>Read More</button>
  </figcaption><a href="index.php?p=berita&Go=<?php echo $data[$judul];?>"></a>
</figure>

        
	 
        <?php } ?>
    </div>
    </div>
    </div>
    <!-- BERITA -->

    <!-- TERBARU -->
     
    <!-- TERBARU -->
</div>
 
    <div class="content">
    <center>    <?php Pagination_font_end($page,$dataPerPage,$querypagination); ?> </center>
        <br>
        <br><br><br>
    </div> 

<?php 
} 

else {


$sql=mysql_query("SELECT * FROM $tabel where $judul = '".mysql_real_escape_string($_GET['Go'])."'");
$data=mysql_fetch_array($sql);
?>

<div class="col-md-12">
<div class="row">
    <!-- DETAIL BERITA -->
    <div class="col-md-9 sidebar" style="
    background-color: white;
    color: black;
"><br>
        <button class="btn btn-primary" onclick="goBack()">Kembali</button>
        <script>
            function goBack() {
                window
                    .history
                    .go(-1);
            }
        </script>
        <br>

        <div class="row">
        <div class="col-md-5">
		  <a href='admin/upload/<?php echo $data["$foto"]; ?>'><img
				onerror="this.src='home/data/image/error/error.png'" 
                width='100%'
                height='100%'
                src='admin/upload/<?php echo $data["$foto"]; ?>'></a>
				</div>
        <div class="col-md-7">

            <h2 style="color:black"><?php echo (substr($data["$judul"],0,200)); ?></h2>
            <h3 style="color:black; font-size:20px">Tanggal :
                <?php echo (format_indo($data["$tanggal"])); ?></h3>
          
            <br>
            <p style="color:black"><?php echo (substr($data["$isi"],0,1000000)); ?></p>
            <br>
        </div>
        </div>

    </div>
    <!-- DETAIL BERITA -->

    <!-- TERBARU -->
    <div class="col-md-3 sidebar" style="background-color:white; padding-bottom:30px">
	<div class="container">
        <br><br><br>
        <h2>BERITA TERBARU</h2>
		
		<br>
		<br>
        <?php
			
			$querytabel="SELECT * FROM $tabel ORDER BY $tanggal DESC LIMIT 0 ,10";
			$proses = mysql_query($querytabel);
			while ($data = mysql_fetch_array($proses))
			  { ?>
        <div class="testimonials">
            <h3><?php echo (substr($data["$judul"],0,200)); ?></h3>
            <p >
                <span class="quotes"></span><?php echo (substr($data["$isi"],0,100)); ?>.<span class="quotes-down"></span></p>
            <a class="btn btn-info btn-xs"
                href="index.php?p=berita&Go=<?php echo $data[$judul];?>" >Baca Selengkapnya...
            </a>
        </div>
<Br>
<Br>
<Br>
        <?php } ?>
    </div>
    </div>
    <!-- TERBARU -->
</div>
</div>

<Br>
<Br>
<Br>
<Br>
<script>
/* Demo purposes only */
$(".hover").mouseleave(function () {
  $(this).removeClass("hover");
});

</script>
<?php
}
}
?>
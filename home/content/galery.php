<?php function galery($tabel,$id,$judul,$foto,$keterangan)
{

	if (!(isset($_GET['Go'])))
	{
?>
<style>
body {
  font-size: 22px;
  background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
  text-align: center;
}

.title {
  font-size: 50px;
  text-transform: uppercase;
  letter-spacing: 7px;
}

.galery__image {
  box-shadow:  0 8px 10px -4px rgba(0, 0, 0, .6);
  border-radius: 10px;
  margin: 20px;
}

.materialbox-caption {
  bottom: 30px;
  right: 0;
  width: 40%;
  padding: 10px;
  margin: auto;
  background-color: #000;
  box-shadow: 1px 1px #fff;
  color: #fff;
}

@media (max-width: 600px) {
  .materialbox-caption {
    width: 90%;
  }
}

@media (max-width: 992px) {
  .materialbox-caption {
    width: 70%;
  }
}
</style>
    <div class="row">
      <div class="col s12 center-align">
        <h1 class="title">Flower Gallery</h1>
      </div>
    </div>
    <div class="row galery">
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
				  { 
			?>
			
			
			<div class="col-md-4 s12 m4 l3">
        <div class="material-placeholder">
          <img class="responsive-img materialboxed galery__image" width="100%" src="admin/upload/<?= $data[$foto];?>" alt="" data-caption="<?= $data[$judul];?>.">
        </div>
      </div>
	  
	  
<!--			  <div class="card">
  <div class="card_front">
    <h1>Informatique</h1>
    <p> sit amet consectetur adipisicing elit. Vel saepe magnam odio facilis f laborum eius dolor error </p>
  </div>
  <div class="card-peel">
    
  </div>
  <div class="card_back">
    <h1>
      <span>Informatique</span>
    </h1>
    
  </div>
</div>
 <div class="card">
  <div class="card_front">
    <h1><?= $data[$judul];?></h1>
    <p><?= $data[$keterangan];?></p>
  </div>
  <div class="card-peel">
    
  </div>
  <div class="card_back" style="background-image: url('admin/upload/<?= $data[$foto];?>');">
    
  </div>
</div>

 -->
    <?php
				} ?>
 </div>
			 </div>
			 <!-- //team -->
		 </div> 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <center>
                <?php Pagination_font_end($page,$dataPerPage,$querypagination); ?>
            </center>
            <br>
            <br>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const imgLightbox = document.querySelectorAll('.materialboxed');
  // Clase de Material - Recibe dos argumentos, las imagenes y las opciones
  M.Materialbox.init(imgLightbox, {
    inDuraction: 500,
    outDuration: 500
  })
})
</script>
<?php }
else {
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="index.php?p=Galery" class="btn btn-primary">Kembali</a>
            <br>
            <br>
            <?php 
				$sql=mysql_query("SELECT * FROM $tabel where $judul = '".mysql_real_escape_string($_GET['Go'])."'");
				$data=mysql_fetch_array($sql);
				?>
						<img 
						width="800px" height="500px"
						src="admin/upload/<?= $data[$foto];?>"
						onerror="this.src='home/data/image/error/error.png'" 
						/>
            <h3><?= $data[$judul];?></h3>
            <hr>
            <p>
                <?= $data[$keterangan];?>
            </p>
            <br>
            <br>
        </div>
    </div>
</div>
<?php }

}?>
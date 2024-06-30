

<?php function galery($tabel,$id,$judul,$foto,$keterangan)
{
?>

<div class="col-md-12">
<br>
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
			
						<div class="col-md-3">
							<br>
							<div class="shop-holder1">
		                         <div class="product-img"><center>
		                            
		                                <img  src="admin/upload/<?php echo $data["$foto"];?>" class="img-responsive" alt="item4">                  
										<?php echo $data["$judul"];?> <br>
										<?php echo $data["$keterangan"];?> <br>
											
									</centeR>
									</div>
		                    </div>
							<br><br>
		                 </div>
			<?php
			  
			  } ?>
</div>

<div class="col-md-12">
<br>
<?php Pagination_produk($page,$dataPerPage,$querypagination); ?>
<br>
<br>
</div>
<?php } ?>


<?php function detail($tabel,$id,$nama,$foto,$kategori,$harga,$stok,$keterangan,$proses,$namatombol)
{
?>

<?php
$sql=mysql_query("SELECT * FROM $tabel where $id = '".mysql_real_escape_string($proses)."'");
$data=mysql_fetch_array($sql);
?>

<script>
function proses()
{	
	var jumlah = document.getElementById("jumlah").value;
	var harga = document.getElementById("harga").value;
	var total = jumlah * harga;
	convertToRupiah(total);	
}

function convertToRupiah(angka)
{
	var rupiah = '';		
	var angkarev = angka.toString().split('').reverse().join('');
	for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
	document.getElementById("total").innerHTML = 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
}
</script>

<div class="col-md-12"><br>
<div class="container"> 
	    <div class="single_grid">
				<div class="grid images_3_of_2">
						<ul id="etalage" class="etalage" style="display: block; width: 300px; height: 533px;">

						    <li class="etalage_thumb thumb_4 etalage_thumb_active" style="background-image: none; display: list-item; opacity: 1;">
								<img class="etalage_thumb_image" src="admin/upload/<?php echo $data["$foto"];?>" style="display: inline; width: 300px; height: 400px; opacity: 1;">
							</li>
						</ul></li></ul>
						 <div class="clearfix"></div>		
				  </div> 
				  <div class="desc1 span_3_of_2">
				  	 <ul class="back">
                	 <li><i class="back_arrow"> </i><a href="index.php?p=produk">Back</a></li>
                     </ul>
					 <h1><?php echo $data["$nama"];?></h1>
				     <div class="dropdown_top">
				     <div class="dropdown_left">					 
					 <font color="red"><?php echo ucwords($kategori);?> : <?php echo $data["$kategori"];?></font>
					 <br>
					 <font color="green"><?php echo ucwords($stok);?> : <?php echo $data["$stok"];?></font>
					
					 <div class="price_single">
					 <div class="head">
					 <h2><span class="amount item_price"><?php echo rupiah($data["$harga"]);?></span></h2>
					 </div>
							
			         <div class="clearfix"></div>
					 <form action="index.php">
					 <input type="hidden" value="produk" name="p">
					 <input type="hidden" value="simpan" name="action">
					 <input type="hidden" value="<?php echo $proses ?>" name="<?php echo $id;?>">
					 <input type="hidden" value="<?php echo ($data["$harga"]);?>" name="harga" id="harga">
							
					 <?php 
					 $action = $_GET['action'];
					 if ($action=="beli")
					 {?>
					       <input type="hidden" value="<?php echo $data["$stok"];?>" name="stok">
							Jumlah : <input onchange="proses();" onkeypress="proses();" onclick="proses();" onkeydown="proses();" onkeypress="proses();" 
									 name="jumlah" id="jumlah" value="0" min="1" max="<?php echo $data["$stok"];?>"  type="number" required> 
							<br>
							Total Harga : <b id="total"></b>
							<br>
							Catatan : <br>
							<textarea name="catatan">
							</textarea>
							<br>
						 
							<div class="size_2-right">
							<button href="index" class="btn btn-primary" value=""><?php echo $namatombol;?> </button>
							</div>
				    <?php } ?>
						    </form>
					        </div>
						    <br>
						 	<b>Deskripsi :</b>
							<p><?php echo $data["$keterangan"];?></p>
			        </div>
			        <div class="clearfix"></div>
			        </div>
			        <div class="simpleCart_shelfItem"> 
			        </div>
				    </div>
          	    <div class="clearfix"></div>
		</div>
</div>
<?php } ?>
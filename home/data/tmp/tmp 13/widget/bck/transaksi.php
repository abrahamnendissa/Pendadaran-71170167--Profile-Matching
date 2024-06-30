<!-- KERANJANG BELANJA -->	
<?php
function transaksi($tabel,$id,$tabel_produk,$id_produk,$nama_produk,$foto,$harga,$jumlah,$id_pelanggan,$judul,$kode_transaksi,$tanggal)
	{ 
	baca_session("id");
	?>
	
	<div class="col-md-12">
	<h4>
	<b>DAFTAR <?php echo $judul;?></b>
	</h4>
	<br>
	<?php 
	$query_kode = "select * from $tabel where status<>'proses' group by $kode_transaksi order by $tanggal DESC";
	$proses_kode = mysql_query($query_kode);
	while ($data_kode = mysql_fetch_array($proses_kode))
			{ 
		$kodenya = $data_kode["$kode_transaksi"];
		$tanggalan = $data_kode["$tanggal"];
		$kodetampil = $kode_transaksi;
		?>
	<h4>
	KODE <?php echo $judul;?>:  <font color="red"><?php echo ($kodenya);?> </font> <br>
	Tanggal : <font color="blue"><?php echo format_indo($tanggalan) ?></font>
	</h4>
	
	<!-- ------------ -->
	<div style="overflow-x:auto;">
	<table <?php tabel(100,'%',1,'left');  ?> >
		<tr>								  
			<th>No</th>
			<th align="center" class="th_border cell"  ><?php $nama_produk = str_replace('_', ' ',$nama_produk);	echo ucwords($nama_produk);?></th>
			<th align="center" class="th_border cell"  ><?php echo ucwords($harga);?></th>
			<th align="center" class="th_border cell"  ><?php echo ucwords($jumlah);?></th>
			<th align="center" class="th_border cell"  >Total</th>
			<th align="center" class="th_border cell"  ><center>Status</center></th>
		</tr>
		<tbody>
			<?php
			$total_keseluruhan = 0;
			$jumlah_keseluruhan = 0;
			$no = 0;
			$startRow=($page-1)*$dataPerPage;
			$no = $startRow;
			$querytabel="SELECT * FROM $tabel where status<>'proses' and $kode_transaksi='$kodenya'";
			$proses = mysql_query($querytabel);
			while ($data = mysql_fetch_array($proses))
			{ 
		
		$idproduknya = ($data["$id_produk"]);
		?>
        <tr class="event2">	
			<td align="left" width="50"><?php $no = (($no +1) ) ; echo $no;  ?></td>
			<td align="left">
			<img width="70" height="50" src="admin/upload/<?php echo baca_database("","$foto","select * from $tabel_produk where $id_produk='$idproduknya'")?>">
			&nbsp;
			&nbsp;
			<b>
				<?php 
					echo baca_database("","$nama_produk","select * from $tabel_produk where $id_produk='$idproduknya'")
				?>
			</b>
			</td>
			<td align="left"><font color="green"><b><?php echo rupiah($data["$harga"]); ?></b></font></td>
			<td align="left">
				<form action="" method="get">
				<input type="hidden" value="keranjang_belanja" name="p">
				<input type="hidden" value="update" name="action">
				<input type="hidden" value="<?php echo $data["$id"]; ?>" name="proses">
				<?php $jumlah_keseluruhan = $jumlah_keseluruhan +  ($data["$jumlah"]); echo  ($data["$jumlah"]); ?>
				
				
				</form>
			</td>
			<td align="left"><font color="green"><b><?php  
				$total_keseluruhan = $total_keseluruhan + (($data["$harga"]) * ($data["$jumlah"]));
				echo rupiah(($data["$harga"]) * ($data["$jumlah"]));?></b></font></td>
			
			<td  class="th_border cell" align="left" width="200">
			
			<center>
			<b><?php $s = $data['status'];   ?> <?php $st = str_replace('_', ' ',$s);	echo ucwords($st);?></b>
			</center>
			</td>
			
        </tr>
			<?php } ?>
			
			
		</tbody>
		
		
			<th align="center" colspan="3" class="th_border cell"  ></th>
			
			<th align="center" class="th_border cell"  >Total Pembayaran : </th>
			<th align="center" class="th_border cell"  ><?php echo rupiah($total_keseluruhan);?></th>
			<td class="th_border cell" align="left" width="200">
						<table border="0">
							<tr>
								<td>
								<?php 
								if ($s=="menunggu_konfirmasi")
								{
									?>
									<font color="magenta" size="2">Bukti Telah Diupload, Menunggu Konfirmasi</font>
									
									<?php
								}
								elseif ($s=="pengiriman")
								{
								?>
									<a href="<?php index(); ?>?p=transaksi&action=cek_resi&proses=<?php echo $kodenya; ?>">
									<?php btn_edit('Cek Resi'); ?></a>
								<?php } 
								elseif ($s=="selesai")
								{
								?>
									
								<?php } 
								elseif ($s=="pengajuan")
								{
								?>
									<a href="<?php index(); ?>?p=transaksi&action=upload_bukti&proses=<?php echo $kodenya; ?>">
									<?php btn_edit('Upload Bukti Pembayaran'); ?></a>
									
								<?php }
								elseif ($s=="order")
								{
								?>
									<a href="<?php index(); ?>?p=transaksi&action=upload_bukti&proses=<?php echo $kodenya; ?>">
									<?php btn_edit('Upload Bukti Pembayaran'); ?></a>
									
								<?php }
								elseif ($s=="booking")
								{
								?>
									<a href="<?php index(); ?>?p=transaksi&action=upload_bukti&proses=<?php echo $kodenya; ?>">
									<?php btn_edit('Upload Bukti Pembayaran'); ?></a>
									
								<?php }
								else
								{
									?>
									<a href="<?php index(); ?>?p=transaksi&action=upload_bukti&proses=<?php echo $kodenya; ?>">
									<?php btn_edit('Upload Bukti Pembayaran'); ?></a>
									<?php 
								}
								?>
								</td>
								</tr>
								<tr>
								<td>
									<a href="<?php index(); ?>?p=transaksi&action=detail&proses=<?php echo $kodenya; ?>">
									<?php btn_detail('Lihat Detail'); ?></a>
								</td>
							</tr>
						</table>
			</td>
			
</table>
</div>
			<?php } ?>
</div>



<?php 
	} ?>
<!-- KERANJANG BELANJA -->	
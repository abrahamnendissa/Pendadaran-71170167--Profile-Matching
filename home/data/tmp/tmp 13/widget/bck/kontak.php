

<?php function kontak($nama_perusahaan,$no_telepon,$alamat,$longitude,$latitude)
{
?>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		function initialize() {
		var options = {
			center:new google.maps.LatLng(<?php echo $longitude.",".$latitude?>),
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP 
		};
		var map=new google.maps.Map(document.getElementById("idmaps"),options);
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(<?php echo $longitude.",".$latitude?>), 
			map: map,
			title: 'Bandung'
		});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
<div class="container">
		<div class="col-md-1">
		</div>
		
		<div class="col-md-6">
		<div id="idmaps" style="width:100%;height:300px;"></div>
		</div>
		
		<div class="col-md-4">
		<b>Nama Perusahaan : <?php echo $nama_perusahaan;?>
		<br>
		No Telepon : <?php echo $no_telepon;?>
		<br>
		Alamat : <?php echo $alamat;?>
		</b>
		</div>
</div>

<?php 
} ?>
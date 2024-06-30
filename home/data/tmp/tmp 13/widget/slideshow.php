<?php 
function slideshow()
{ 
	include_once "home/include/settings/settings.php";
	?>
	


<div class="banner">

<script>
		// You can also use "$(window).load(function() {"
		$(function () {
		 // Slideshow 4
		$("#slider3").responsiveSlides({
			auto: true,
			pager: true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			before: function () {
		$('.events').append("<li>before event fired.</li>");
		},
		after: function () {
			$('.events').append("<li>after event fired.</li>");
			}
			});
		});
</script>
<div id="top" class="callbacks_container">
<ul class="rslides callbacks callbacks1" id="slider3">
<li id="callbacks1_s0" class="" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;">
	<div class="banner1">
		<div class="container">
			<div class="banner-info">
				<h3><?php echo $judul_slide;?></h3>
				
				<a href="<?php echo $link_slide;?>" class="hvr-outline-out button2 scroll"><?php echo $tombol_slide;?></a>
			</div>
		</div>
	</div>
</li> 
<li id="callbacks1_s1" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;" class="">
	<div class="banner2">
		<div class="container">
			<div class="banner-info2 text-center">
			<h3><?php echo $judul_slide;?></h3>
				
				<a href="<?php echo $link_slide;?>" class="hvr-outline-out button2 scroll"><?php echo $tombol_slide;?></a>
			</div>
		</div>
	</div>
</li>
<li id="callbacks1_s2" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s;" class="callbacks1_on">
	<div class="banner1">
		<div class="container">
			<div class="banner-info">
			<h3><?php echo $judul_slide;?></h3>
				
				<a href="<?php echo $link_slide;?>" class="hvr-outline-out button2 scroll"><?php echo $tombol_slide;?></a>
			</div>
		</div>
	</div>
</li> 
<li id="callbacks1_s3" style="display: block; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out 0s;" class="">
	<div class="banner2">
		<div class="container">
			<div class="banner-info2 text-center">
			<h3><?php echo $judul_slide;?></h3>
				
				<a href="<?php echo $link_slide;?>" class="hvr-outline-out button2 scroll"><?php echo $tombol_slide;?></a>
			</div>
		</div>
	</div>
</li>
</ul>
</div>
<div class="clearfix"></div>
</div>

<?php } ?>
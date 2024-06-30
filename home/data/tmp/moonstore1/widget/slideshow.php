<?php 
function slideshow()
{ 
	include_once "home/include/settings/settings.php";
?>


   <!--./ Social Div End -->
    <div id="main-slider">

        <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">
                <div class="item active">

                    <img src="<?php echo $slide_a1;?>" alt="" />
                    <div class="carousel-caption ">
                        
<h2><?php echo $judul_slide;?></h2>
<a href="<?php echo $link_slide;?>" class="btn btn-info"><?php echo $tombol_slide;?></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo $slide_a2;?>" alt="" />
                    <div class="carousel-caption ">
                        
<h2><?php echo $judul_slide;?></h2>
<a href="<?php echo $link_slide;?>" class="btn btn-info"><?php echo $tombol_slide;?></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo $slide_a3;?>" alt="" />
                    <div class="carousel-caption ">
                       <h2><?php echo $judul_slide;?></h2>
<a href="<?php echo $link_slide;?>" class="btn btn-info"><?php echo $tombol_slide;?></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                    </div>
                </div>
            </div>
            <!--INDICATORS-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example" data-slide-to="1"></li>
                <li data-target="#carousel-example" data-slide-to="2"></li>
            </ol>
            <!--PREVIUS-NEXT BUTTONS-->
            
        </div>

    </div>
  
			

<?php } ?>
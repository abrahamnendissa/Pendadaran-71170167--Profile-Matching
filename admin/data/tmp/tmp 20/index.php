<?php 
$default_url = '../../../data/tmp/tmp 20';
$tema = '20-colored_admin_panel-web_Free20-04-2017_596693991';
$url = $default_url.'/'.$tema;
include '../../../include/all_include.php';
include '../../../include/function/session.php'; 
?> 
<script type = "application/x-javascript" > addEventListener("load", function () {
    setTimeout(hideURLbar, 0);
}, false);
function hideURLbar() {
    window.scrollTo(0, 1);
}
</script> <link rel = "stylesheet" href = "<?php echo $url; ?>/css/bootstrap.css" > <link
    href="<?php echo $url; ?>/css/style.css"
    rel='stylesheet'
    type='text/css'/>
<link
    href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
    rel='stylesheet'
    type='text/css'>
    <link rel="stylesheet" href="<?php echo $url; ?>/css/font.css" type="text/css"/>
    <link href="<?php echo $url; ?>/css/font-awesome.css" rel="stylesheet">
        <script src="<?php echo $url; ?>/js/jquery2.0.3.min.js"></script>
        <script src="<?php echo $url; ?>/js/modernizr.js"></script>
        <script src="<?php echo $url; ?>/js/jquery.cookie.js"></script>
        <script src="<?php echo $url; ?>/js/screenfull.js"></script>
        <script>
            $(function () {
                $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

                if (!screenfull.enabled) {
                    return false;
                }

                $('#toggle').click(function () {
                    screenfull.toggle($('#container')[0]);
                });
            });
        </script>

    </head>
    <body class="dashboard-page">

        <nav class="main-menu">
            <ul>

                <!-- MENU -->
            <?php

$m = new SimpleXMLElement('../../../include/settings/menu.xml', null, true);
foreach($m as $i){if($i->t == 's' ){
?>
<!-- SINGLE -->

			<li>
				<a href="<?php echo $i->l;?>">
					<i class="<?php echo $i->i;?> nav-icon"></i>
					<span class="nav-text">
						<?php echo $i->n;?>
					</span>
				</a>
			</li>
<!-- /SINGLE -->
<?php
}else if($i->t == 'm' ){ $idmenu = $i->id;
?>

<!-- MULTI -->
<li class="has-subnav">
				<a href="javascript:;">
				<i class="<?php echo $i->i;?> nav-icon" aria-hidden="true"></i>
				<span class="nav-text"><?php echo $i->n;?>
				</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
				</a>
				<ul>
					<?php
		$m1 = new SimpleXMLElement('../../../include/settings/menu.xml', null, true);
		foreach($m1 as $i1) {
		if($i1->s=="$idmenu" and $i1->t=="sm" ){
		?>
            <li>
				<a class="item" href="<?php echo $i1->l;?>">
				&nbsp; &nbsp; <i class="<?php echo $i1->i;?>"></i> &nbsp; <?php echo $i1->n;?></a>
				</li>
		<?php }} ?>	
				</ul>
			</li>
                                    
<!-- /MULTI -->
		<?php }} ?>
                <!-- /MENU -->

            </ul>
            <ul class="logout">
                <li>
                    <a href="login.html">
                        <i class="icon-off nav-icon"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <section class="wrapper scrollable">
            <nav class="user-menu">
                <a href="javascript:;" class="main-menu-access">
                    <i class="icon-proton-logo"></i>
                    <i class="icon-reorder"></i>
                </a>
            </nav>
            <section class="title-bar">
                <div class="logo">
                    <h3>
                        <a href="<?php home();?>"><img width="50" src="<?php echo $avatar;?>" alt=""/><?php echo ucwords($judul);?></a>
                    </h3>
                </div>

                <div class="header-right">
                    <div class="profile_details_left">

                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a
                                        href="#"
                                        class="dropdown-toggle"
                                        data-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li>
                                            <a href="<?php home();?>">
                                                <i class="fa fa-home"></i>
                                                Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php logout();?>">
                                                <i class="fa fa-sign-out"></i>
                                                Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </section>
            <div class="main-grid">
                <div class="agile-grids">
                    <!-- blank-page -->
                    <center>
                        <div class="table-heading">
                            <font color="grey">
                                <h4>Menu / Table /
                                    <?PHP tabelnomin();?></h4>
                            </font>
                            <br></div>
                        </center>

                        <div class="banner">
                            <h2>
                                <div class="social grid">
                                    <div class="grid-info">

                                        <?php include 'halaman.php'; ?>

                                        <br>
                                            <br>
                                                <br></div>
                                            </div>
                                            <!-- //blank-page -->
                                        </div>
                                    </div>

                                    <!-- footer -->
                                    <div class="footer">
                                        <?php echo $copyright;?>
                                    </div>
                                    <!-- //footer -->
                                </section>
                                <script src="<?php echo $url; ?>/js/bootstrap.js"></script>

                            </body>
                        </html>
                        .
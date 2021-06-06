<?php 
if (isset($_GET['colour'])) {
	$colour = $_GET['colour'];
}
else {
	$colour = '';
}

$setColour = '';

if (strlen($colour) > 0) {
	$setColour = '<style>
	p {
  color: '.$colour.';
	}
	</style>';
}
?>
<!DOCTYPE html>
<html  >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="" type="image/x-icon"> <!-- Insert a tab icon in this line -->
  <meta name="description" content="">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  
  
  <title>Ryan Tuck's web design portfolio</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link type="text/css" href="https://getbootstrap.com/1.0.0/assets/css/bootstrap-1.0.0.min.css">
  
  <? echo $setColour; ?>
  
</head>
<body>
  
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap">Ryan Tuck</span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                
                
            </div>
        </div>
    </nav>

</section>

<section class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">

    

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Introduction</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">Insert some useful text here.</p>
				<p class="mbr-text mbr-fonts-style display-7">The background image will be replaced whenever I find a better picture.</p>
            </div>
        </div>
    </div>
</section>

<section class="content1 cid-s48udlf8KU" id="content1-8">
    
    <div class="container">
	    <h2>3D Pong</h2>
		<p>Made as group final project for COMP 4302.</p>
		<iframe src="https://rtuck1998.github.io/3D-PONG/" style="width:95%;height:700px" title="Moving Cube"></iframe>
        <div class="row justify-content-center">
		
            <div class="col-sm">
			    <br><h2>Club Lacrosse</h2>
				<p>In-progress official website. Items on each page change position to fit the size of the user's screen.</p>
				<iframe src="http://v2.usclublax.com/" style="width:100%;height:700px" title="Moving Cube"></iframe>
			</div><div class="col-sm">
                <h2>Rotating Cube</h2>
				<p>This cube rotates when buttons are pressed by the user.</p>
				<iframe src="https://rtuck1998.github.io/Moving-Cube-in-WebGL/" style="width:100%;height:700px" title="Moving Cube"></iframe>
			</div></div><div class="row justify-content-center">
			<div class="col-sm">
				<h2>Old Maps of Newfoundland</h2>
				<p>This was made as a final project for a third-year course. It combined several old maps of Newfoundland to create an interactive map of the entire island.</p>
				<iframe src="https://rtuck1998.github.io/Newfoundland-Made-using-Old-Maps/" style="width:100%;height:700px" title="Old Maps of Newfoundland"></iframe>
			</div><div class="col-sm">
				<h2>Points of School Zones</h2>
				<p>The points shown here were used on a real estate website to automatically determine which school was closest for any hosue in St. John's and surrounding areas.</p>
				<iframe src="https://rtuck1998.github.io/School-Zones-of-St-Johns/" style="width:100%;height:700px" title="School Zone Map"></iframe>
            </div></div><div class="row justify-content-center">
			<div class="col-sm">
				<h2>Population Map (1945)</h2>
				<p>This interactive map displays the populations of communities along Trinity Bay and Conception Bay as they were in 1945. Users can enter the name of any community into the search bar to be directed to that exact location on the map.</p>
				<iframe src="https://rtuck1998.github.io/Population-Map-of-Trinity-Conception-Bay-in-Newfoundland--1945-/" style="width:100%;height:700px" title="Population Map"></iframe>

            </div></div>
        </div>
    </div>
</section>


<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">The social media links don't go anywhere so don't click on them</li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
            </div>
        </div>
    </div>
</section>
</body>
</html>
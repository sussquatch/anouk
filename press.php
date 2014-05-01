<?php
$htmlTitle="Anouk Jewelry - Nature Inspired, Organic Custom Jewellery by Toronto Designer";
$navTrail='PRESS';

/* DON'T TOUCH THE FOLLOWING */

$navName = explode('>',$navTrail);
$navDepth = sizeof($navName);
switch ($navDepth) {
    case 1:
        $path = "";
        $mainNavPath ="";
		$subNavPath  ="collections/";
		$footNavPath ="";
        break;
    case 2:
 		$path = "../";
        $mainNavPath ="../";
		$subNavPath  ="";
		$footNavPath ="../";       
		break;
}

$htmlBodyID= implode('-',$navName);
$htmlBodyID=strtolower($htmlBodyID);

?>
<!doctype html>
<?php require_once( $path . 'includes/html_head.inc.php'); ?>

<!--  include jCarousel library -->
	<link    href="<?php echo "$path" ?>o6_gallery/jcarousel_skins/custom/skin.css" rel="stylesheet" type="text/css" />
	<script   src="<?php echo $path ?>o6_gallery/jcarousel_lib/jquery.jcarousel.min.js" type="text/javascript"></script>

	<script>
		$(document).ready(function() {
			//Render carousel
			$('#carousel').jcarousel();

			
		});
	</script>
	
</head>
<body id="<?php echo $htmlBodyID ?>" >


	
	
	<!--Begin: id="wrap-all" -->
	<div id="wrap-all">


<?php include( $path . 'includes/content_head.inc.php'); ?>	



<!-- =================================================================================== -->


		
		<!--Begin: id="wrap-body" -->
		<div id="wrap-body">

			<!--Begin: id="wrap-content" -->
			<div id="wrap-content">

<!--Begin: id="mask" -->
<div id="mask" style="width:958px; height:550px; position:absolute; top:0px; left:0px;	background-color:#fff; opacity:1; z-index:100;"></div>
<!--End: id="mask" -->


				<!--Begin: id="content" -->
				<div id ="content">

<div id="page-title-box">
	<div id="page-logo"></div>
	<h1>
		<div id="page-title">ANOUK PRESS</div>
	</h1>
</div>
	

<!--Begin: id="page-content" -->	
<div id="page-content">
	
	<div class="jcarousel-container" >
		<div class="jcarousel-clip" style="overflow:hidden;">
			<ul id="carousel" class="jcarousel-list">
				<li class="jcarousel-item" ><a href="data_2/page_press/thumbs/Canadian_Jeweller_April_2011.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/2011_04_canadian_jeweller_thumb.jpg" width="118" height="160" alt="Canadian Jeweller, April 2011" title="Canadian Jeweller, April 2011"></a></li>
				<li class="jcarousel-item" ><a href="data_2/page_press/thumbs/elle_canada_june_2011_anouk_earrings_ring.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/2011_06_elle_canada_thumb.jpg" width="118" height="160" alt="Elle Canada, June 2011" title="Elle Canada, June 2011"></a></li>
				<li class="jcarousel-item" ><a href="data_2/page_press/thumbs/showcase_500_rings.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/showcase_500_rings_2012.jpg" width="118" height="160" alt="Showcase 500 Rings, 2012" title="Showcase 500 Rings, 2012"></a></li>
				<li class="jcarousel-item" ><a href="data_2/page_press/thumbs/souls_of_my_shoes.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/2011_08_souls_of_my_shoes_thumb.jpg" width="118" height="160" alt="The Souls of My Shoes, August 2011" title="The Souls of My Shoes, August 2011"></a></li>
                <li class="jcarousel-item" ><a href="data_2/page_press/thumbs/Elle_Canada_Sept_2012_earth_and_sky_rings.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/Elle_Canada_Sep_2012_cover.jpg" width="118" height="160" alt="Elle Canada, September 2012" title="Elle Canada, September 2012"></a></li>
                <li class="jcarousel-item" ><a href="data_2/page_press/thumbs/Flare_Accessories_Fall_2012.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/Flare_Accessories_Fall_2012_cover.jpg" width="118" height="160" alt="Flare Accessories, Fall 2012" title="Flare Accessories, Fall 2012"></a></li>
                <li class="jcarousel-item" ><a href="data_2/page_press/thumbs/good_life_connoisseur_summer_2012.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/Good_Life_Connoisseur_summer_2012_cover.jpg" width="118" height="160" alt="Good Life Connoisseur, Summer 2012" title="Good Life Connoisseur, Summer 2012"></a></li>
                <li class="jcarousel-item" ><a href="data_2/page_press/thumbs/7x7_SFBay_Anouk_Organic_Bands_2014.jpg" class="fancybox-enabled"><img src="data_2/page_press/thumbs/7x7_San_Francisco_Bay_Jan_2014_cover.jpg" width="118" height="160" alt="Good Life Connoisseur, Summer 2012" title="Good Life Connoisseur, Summer 2012"></a></li>
			</ul>
		</div>
	</div>			
	


</div>
<!--End: id="page-content" -->	



				</div>
				<!--End: id="content" -->
				
					
			</div>	
			<!--End: id="wrap-content" -->	

		</div>	
		<!--End: id=id="wrap-body" -->



<!-- =================================================================================== -->



	<?php include( $path . 'includes/content_foot.inc.php'); ?>	

	</div id="wrap-all">
	<!--End: id="wrap-all" --> 

	<?php include( $path . 'includes/debug.inc.php'); ?>

	<?php require_once( $path . 'includes/html_tail.inc.php'); ?>



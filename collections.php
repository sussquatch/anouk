<?php
$htmlTitle="Anouk Jewelry - Nature Inspired, Organic Jewellery by Toronto Designer";
$navTrail='COLLECTIONS';



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


				<!--Begin: id="page-title" -->					
				<div id="page-title-box">
					<div id="page-logo"></div>
					<h1>
						<div id="page-title">ANOUK COLLECTIONS</div>
					</h1>
				</div>
				<!--End: id="page-title" -->
					
<div id="collections-tab">
<ul >
<li><a href="<?php echo $subNavPath ?>wedding.php?a=y&s=1&item=1" title="Wedding" alt="Wedding"><img src="imgs/collections_page/organic_engagement_ring_solitaire.jpg" width="180" height="146"/><span>WEDDING</span></a></li>
<li><a href="<?php echo $subNavPath ?>green_sapphires.php?a=y&s=1&item=1" title="Green Sapphires" alt="Green Sapphires"><img src="imgs/collections_page/green_sapphire_engagement_ring.jpg" width="180" height="146"/><span>GREEN SAPPHIRES</span></a></li>
<li><a href="<?php echo $subNavPath ?>signature.php?a=y&s=1&item=1"  title="Signature" alt="Signature"><img src="imgs/collections_page/inspiration_well_aquamarine_ring.jpg" width="180" height="146"/><span>SIGNATURE</span></a></li>
<li><a href="<?php echo $subNavPath ?>raw_diamonds.php?a=y&s=1&item=1"  title="Raw Diamonds" alt="Raw Diamonds"><img src="imgs/collections_page/rough_diamond_engagement_ring.jpg" width="180" height="146"/><span>RAW DIAMONDS</span></a></li>
<li><a href="<?php echo $subNavPath ?>rings.php?a=y&s=1&item=1"  title="Rings" alt="Rings"><img src="imgs/collections_page/byzantine_ring.jpg" width="180" height="146"/><span>RINGS</span></a></li>
<li><a href="<?php echo $subNavPath ?>necklaces.php?a=y&s=1&item=1" title="Necklaces" alt="Necklaces"><img src="imgs/collections_page/green_tourmaline_necklace.jpg" width="180" height="146"/><span>NECKLACES</span></a></li>
<li><a href="<?php echo $subNavPath ?>earrings.php?a=y&s=1&item=1"  title="Earrings" alt="Earrings"><img src="imgs/collections_page/pebble_stud_earrings.jpg" width="180" height="146"/><span>EARRINGS</span></a></li>
<li><a href="<?php echo $subNavPath ?>custom.php?a=y&s=1&item=1"  title="Custom" alt="Custom"><img src="imgs/collections_page/custom_ruby_engagement_ring.jpg" width="180" height="146"/><span>CUSTOM</span></a></li>

</ul>
</div>
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



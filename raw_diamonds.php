<?php
$htmlTitle="Anouk Jewelry Unique Organic Custom Rough Diamond Rings by Toronto Designer";
$navTrail='RAW_DIAMONDS';



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
	<script   src="<?php echo $path ?>o6_gallery/jcarousel_lib/jquery.jcarousel.js" type="text/javascript"></script>

	<!-- o6_gallery -->
	<script src="<?php echo $path ?>o6_gallery/o6_gallery.js"    type="text/javascript"  ></script>




</head><body id="<?php echo $htmlBodyID ?>" >


	
	
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
			
<div class="left-column"><a class="no-underline" href="collections/raw_diamonds.php?a=y&item=1" alt="Diamond Octahedron Ring" title="Diamond Octahedron Ring"><img src="imgs/raw_diamonds_page/diamond_octahedron_ring.jpg" width="120"/></a></div>	
<div class="center-column">
	
	<div id="page-title-box">
		<div id="page-logo"></div>
		<h1>
			<div id="page-title">ANOUK RAW DIAMONDS</div>
			<div class="tag-line">Unrefined elegance </div>
		</h1>
	</div>

	<div id="raw-diamonds-content">
		<p>Anouk’s newest collection celebrates raw diamonds. Elegant, metal designs encase these breathtaking, un-faceted, irregularly-shaped and purely-coloured stones, highlighting the unaffected beauty and inherent perfection of the diamond in its natural state.</p>
		<p>Inspired by nature’s geological splendor and the craftsmanship of Classical times, the raw diamond pieces feel like ancient artifacts – found treasures that connect the wearer not only to the earth’s textures and colours, but also to the creative minds of our ancestors whose imaginations first transformed them into jewels. </p>
		<p>The pieces in this collection are especially beautiful as unconventional engagement rings, right-hand rings, or as commemorations of other personal celebrations. More than jewelry, they become statements for independent spirits and the environmentally-conscious. When diamonds are traditionally processed, sometimes more than half of the precious stone goes to waste, diminishing our natural resources. The less cutting and faceted used, the more diamond is left to enjoy.</p>
		<p>Unlike more traditional stones, these are as provocative as they are alluring, conjuring up stories of worlds beyond and beneath. Creating new and gorgeous mythologies. </p>
		<p class="tweek-1"><em>&ldquo;&nbsp;I adore working with these magical stones. They have an inner glow... and an essence that feels pure and timeless.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
		<div class="v-space-20"></div>
		<p class="emphasis" >We are passionate about raw diamonds!&nbsp;<a href="collections/raw_diamonds.php?a=y&s=1&item=1" title="raw diamond collections" alt="raw diamond collections">Have a look</a>, and if you have any questions, please <a href="contact.php" title="connect with us" alt="connect with us">connect with us</a>; we love to answer questions.</p>
	</div>	
</div>	
<div class="right-column"><a class="no-underline" href="collections/raw_diamonds.php?a=y&item=2" alt="Three Diamonds in the Rough Ring" title="Three Diamonds in the Rough Ring"><img src="imgs/raw_diamonds_page/three_rough_diamonds_ring.jpg" width="120"  /></a></div>					
				


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



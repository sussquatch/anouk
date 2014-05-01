<?php
$htmlTitle="Links| Anouk Jewelry - Nature Inspired Engagement Ring by Toronto Custom Jewellery Designer;";
$navTrail='LINKS';



/* DON'T TOUCH THE FOLLOWING */

$navName = explode('>',$navTrail);
$navDepth = sizeof($navName);
$htmlBodyID= implode('-',$navName);
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

?>

<!doctype html>

<?php require_once( $path . 'includes/html_head.inc.php'); ?>

	<!--  include jCarousel library -->
	<link    href="<?php echo "$path" ?>o6_gallery/jcarousel_skins/custom/skin.css" rel="stylesheet" type="text/css" />
	<script   src="<?php echo $path ?>o6_gallery/jcarousel_lib/jquery.jcarousel.js" type="text/javascript"></script>

	<!-- o6_gallery -->
	<link  href="<?php echo $path ?>o6_gallery/image_transition.css" media="all"  rel="stylesheet" type="text/css" ></link> 
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

				<!--Begin: id="content" -->
				<div id ="content">
					
				
<div id="page-title">							
<h2><div id="page-logo"></div>Links</h2>					
</div>

				</div>
				<!--End: id="content" -->
					
<!--Begin: id="mask" -->
<div id="mask" style=""></div>
<!--End: id="mask" -->
					
			</div>	
			<!--End: id="wrap-content" -->	

		</div>	
		<!--End: id=id="wrap-body" -->



<!-- =================================================================================== -->



	<?php include( $path . 'includes/content_foot.inc.php'); ?>	

	</div id="wrap-all">
	<!--End: id="wrap-all" --> 

	<?php include( $path . 'includes/debug.inc.php'); ?>
	<script src="<?php echo $path ?>js/pages_in_main_n_foot_nav.js"></script>	
	<?php require_once( $path . 'includes/html_tail.inc.php'); ?>



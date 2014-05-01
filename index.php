<?php
$htmlTitle="Anouk Jewelry - Nature Inspired, Organic, Custom Engagement Rings, Wedding Bands, and Raw/Rough Diamond Jewellery by Toronto Designer";
$navTrail='HOME';


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



<div class="image-box-1"><img src="imgs/page_home/anouk_jewelry_unique_rings.jpg" width="507"/></div>
<div class="image-box-2"><img src="imgs/page_home/landing_pg_logo200x188.jpg" width="200"/></div>
<div id="tag-line-box"><div id="tag-line-box-inner">
	<div class="tag-line-1"><em>&ldquo;&nbsp;You cannot think of treasure</em></div>
	<div class="tag-line-2"><em>without having your imagination sparked.&nbsp;&rdquo;</em></div>
</div></div>

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



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

					<div id="logo">

						<img src="imgs/anouk_Jewelry_logo_home.png" />

					</div>

					<div id="tag-line-box">
						<div id="tag-line-box-inner">
								<div class="tag-line-1"><em>&ldquo;&nbsp;You cannot think of treasure</em></div>
								<div class="tag-line-2"><em>without having your imagination sparked.&nbsp;&rdquo;</em></div>
						</div>
					</div>
						
				</div>

			</div>

		</div>


<!-- =================================================================================== -->



	<?php include( $path . 'includes/content_foot.inc.php'); ?>	

	</div id="wrap-all">
	<!--End: id="wrap-all" --> 

	<?php include( $path . 'includes/debug.inc.php'); ?>

	<?php require_once( $path . 'includes/html_tail.inc.php'); ?>



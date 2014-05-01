<?php
$item = $_GET["item"];
$carousel_first_item_index = $_GET["s"];
$animateSubNav = $_GET["a"];

$galleryName = strtolower($navName[1]);
$filename=$dataDir.$jsonFile;
$json=file_get_contents('../' . $filename);
$gallery_data =json_decode($json, true);
$galleryLength = count($gallery_data["items"]);

if (!$item) $item = 0;  //  item does not exist
$item = (int) $item;   // force integer
if ( $item < 0 || $galleryLength < $item ) $item = 0; // check for out of bound
	
$f = $gallery_data["items"][$item-1]["f"];
$n = $gallery_data["items"][$item-1]["n"];
$d = $gallery_data["items"][$item-1]["d"];
$p = $gallery_data["items"][$item-1]["p"];

$htmlTitle = "Anouk Jewelry - " . "$n" . " by Toronto Organic Custom Jewellery Designer";
?>
<!doctype html>
<?php require_once( $path . 'includes/html_head.inc.php'); ?>

	<link href="<?php echo $path ?>css/gallery_page.css" rel="stylesheet" type="text/css" >

	<!--  include jCarousel library -->
	<link    href="<?php echo "$path" ?>o6_gallery/jcarousel_skins/custom/skin.css" rel="stylesheet" type="text/css" />
	<script   src="<?php echo $path ?>o6_gallery/jcarousel_lib/jquery.jcarousel.min.js" type="text/javascript"></script>

	<!-- o6_gallery -->
	<script src="<?php echo $path ?>o6_gallery/o6_gallery.min.js"    type="text/javascript"  ></script>
	<!-- <script src="<?php echo $path ?>o6_gallery/o6_gallery.js"    type="text/javascript"  ></script> -->




</head><body id="<?php echo $htmlBodyID ?>" class="gallery">


	
	
	<!--Begin: id="wrap-all" -->
	<div id="wrap-all">


<?php include( $path . 'includes/content_head.inc.php'); ?>	



<!-- =================================================================================== -->


		
		<!--Begin: id="wrap-body" -->
		<div id="wrap-body">

			<!--Begin: id="wrap-content" -->
			<div id="wrap-content">

<!--Begin: id="mask" -->
<div id="mask" style="width:958px; height:525px; position:absolute; top:25px; left:0px;	background-color:#fff; opacity:1; z-index:100;"></div>
<!--End: id="mask" -->
		
				<!--Begin: id="nav-sub" -->
				<div id="nav-sub" <?php if ($animateSubNav =='y') {	echo 'style="top:-25;" data-animate="y"'; } else { echo 'style="top:0;" data-animate="n"'; } ?> >
					
				<?php include( $path . 'includes/nav_sub.inc.php'); ?>
				</div>	
				<!--End: id="nav-sub" -->

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
					
					<!--Begin: id="display-box" -->
					<div id="display-box">
						<!-- images to view will be dynamically loaded in here -->

<?php if ($item != 0) { ?>

	<div class="item show" data-item="<?php echo $item ?>">
		<img height="260" width="320" title="<?php echo $n ?>" alt="<?php echo $n ?>" src="../data/<?php echo $galleryName?>/imgs/full/<?php echo "$f"; ?>.jpg">
		<ul>
			<li><?php echo $n ?></li>
			<li><?php echo $d ?></li>
			<li><?php echo $p ?></li>
		</ul>
	</div>

<?php } ?>

<?php if ($item == 0) {  

	if ($galleryLength != 0) { ?>

	<div class="item show" data-item="0">
		<img height="260" width="320" title="" alt="" src="../imgs/blank.jpg">
		<ul>
			<li>Please select an item</li>
			<li></li>
			<li></li>
		</ul>
	</div>

<?php 	} else {?>
	<h1 style="padding-top: 200px; padding-left: 130px; font-size: 32px;">UNDER CONSTRUCTION</h1>
<?php }
	}?>

						
					</div>
					<!--End: id="display-box" -->
					
					<?php if ($galleryLength != 0) { ?>
					<!--Begin: id="carousel-box" -->
					<div id="carousel-box" >
						<ul id="carousel" class="jcarousel-skin-custom"> 
							<!-- jcarousel content will be dynamically loaded in here. Note, "custom" in the class name is the name of the skin-->
						</ul>
					</div>
					<!--End: id="carousel-box" -->
					<?php } ?>

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
	<script>
	// load gallery
				o6_gallery( '<?php echo $galleryName ?>',
							'<?php echo $path.$dataDir ?>', 
							'<?php echo $jsonFile ?>',
							'<?php echo $galleryLength ?>', 
							'<?php echo $item ?>',  
							'<?php echo $carousel_first_item_index ?>'); 	
		
	</script>
	<?php require_once( $path . 'includes/html_tail_collections_gallery.inc.php'); ?>


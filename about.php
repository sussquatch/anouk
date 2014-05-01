<?php
$htmlTitle="Anouk Jewelry - About Toronto Organic Custom Jewellery Designer";
$navTrail='ABOUT';


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

<div class="right-column">
	
	<div id="page-title-box">
		<div id="page-logo"></div>
		<h1>
			<div id="page-title">ABOUT ANOUK</div>
			<div class="tag-line">The artist behind Anouk</div>
		</h1>
	</div>

	<div id="about-text-content">
		<p>Anat Kaplan studied, appraised, curated, taught, and created various forms of art all on the road to finding the place her spirit truly sings: jewelry design. </p>
		<p>The treasures of ancient and natural worlds have captivated Anat since girlhood and are her inspirations for Anouk creations still today. Moscow-born, Israel-raised and now Toronto-based, Anat solders myriad modern-day cultures with ancient mythology, crafting jewelry a Roman goddess might wear. Or an advertising manager. Or a mermaid.  </p>
		<p>She believes that through adornment we can share all that is artful about our own stories. We can connect with one another, with ourselves, and with our ancient lineage – real and imagined.</p>
		<p>Anat holds an MA and teaching diploma in Art History, lives with her husband and beautiful young daughter in Toronto’s Wychwood neighbourhood and can often be found sorting aquamarines to the tune of Bruni or Debussy while sipping mint tea.</p>
		<div class="v-space-15"></div>
		<p><em>&ldquo;&nbsp;You cannot think of treasure without having your imagination sparked.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
		
	</div>	
</div>	

<div class="image-box-1"><img src="imgs/page_about/anat_kaplan_jewellery_designer273x410.jpg" width="273"/></div>	


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



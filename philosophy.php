<?php
$htmlTitle="Anouk Jewelry - Philosophy: Nature Inspired, Organic Custom Engagement Rings and Custom Jewellery by Toronto Designer";
$navTrail='PHILOSOPHY';


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
		<div class="background-image" style="opacity: 0; filter: alpha(opacity=0);"></div>
		<div id="wrap-body">

			<!--Begin: id="wrap-content" -->
			<div id="wrap-content">
				
<!--Begin: id="mask" -->
<div id="mask" style="width:958px; height:550px; position:absolute; top:0px; left:0px;	background-color:#fff; opacity:1; z-index:100;"></div>
<!--End: id="mask" -->

				<!--Begin: id="content" -->
				<div id ="content">

<div class="column">
	
	<div id="page-title-box">
		<div id="page-logo"></div>
		<h1>
			<div id="page-title">PHILOSOPHY</div>
			<div class="tag-line">Jewelry couturier </div>
		</h1>
	</div>

	<div id="text-content">
		<p>Integrating motifs, textures, and colours lifted from ancient history, mythology, abstract art, and Nature’s elements, visionary Toronto jewelry designer, Anat Kaplan hand-sculpts stunning, unlike-anything-else adornments for those who share her love of delicate details. </p>
		<p>Anat’s own rich personal artistic background heavily informs the depth of her design sensibilities. She articulates in metal and stones the mystery of French symbolism, the sensual curves of Art Nouveau, the spirituality of Abstract Expressionism&hellip; Brushstrokes that have moved her, that have told their own story.</p>
		<p>And she grounds this artistic passion with a quiet nod to the natural world. A stone may be the colour of a perfect summer afternoon sky. A band’s textured surface may show the ripples of a trembling, new creek. </p>
		<div class="image-box"><img class="float-right" src="imgs/page_philosophy/natural_textured_ring226x184.jpg" width="226"/></div>
		<p>Anat chose to call her couturier Anouk because it was the name her mother gave her as a baby. Its French roots connect her to the artists she loves and the sound of the word &ndash; with the magic of its abrupt ending &ndash; speaks of something unfinished, primal.</p>
		
		<div class="v-space-15"></div>
		<p class="tweek-1"><em>&ldquo;&nbsp;Most of my role models come from the art world&hellip; My work is influenced by Odilon Redon, Gustav Klimt, the unknown artists of Byzantine mosaics, Jean Arp, Henry Moore and so many, many more.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
	</div>	

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



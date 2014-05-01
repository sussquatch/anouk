<?php
$htmlTitle="Anouk Jewelry - Unique Organic Custom Wedding Bands and Custom Engagement Rings by Toronto Designer";
$navTrail='WEDDING_CUSTOMS';


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

<div class="column">
	
	<div id="page-title-box">
		<div id="page-logo"></div>
		<h1>
			<div id="page-title">ANOUK WEDDING CUSTOMS</div>
			<div class="tag-line">Deeply meaningful designs</div>
		</h1>
	</div>

	<div id="text-content">
		
		<p>Unfinished gems and hewn metals reflect the intrinsic majesty of Nature’s treasures and the purity of great love. In the Anouk Wedding collection, the uncommon partners of delicate artistry and raw elements marry. Each unique wedding, engagement and anniversary band is infused with the character of its wearer and its mate’s.</p>
		<p>These custom rings tell a deeply personal love story. One rich in their secret symbols. A story told by lovers – during your personal consultation – and translated by Anat, etched in gold or platinum.
		<p>Enigmatic.</p> 
		<p>For always.</p>
		<p>Anouk designs are not just exquisitely beautiful pieces of jewelry, they are art objects invested with meaning, cherished by those who appreciate things done differently.</p>
		
		<div class="image-box"><img class="float-right" src="imgs/page_wedding_customs/wedding_engagement_set171x129.jpg" width="171"/></div>
		
		<div class="v-space-15"></div>
		<p class="tweek-1"><em>&ldquo;&nbsp;I work with clients to draw out their personal symbols and then find the right metals and stones to express those significant, symbolic meanings.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
		<div class="v-space-15"></div>
		<p><a href="contact.php" title="Tell us" alt="Tell us">Tell us</a> what you’re imagining for your special ring.</p>
		
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



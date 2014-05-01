<?php
$htmlTitle="Anouk Jewelry - Unique Organic Custom Rings and Custom Jewellery by Toronto Jewellery Designer";
$navTrail='ANOUK_FOR_HER';


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
			<div id="page-title">ANOUK FOR HER</div>
			<div class="tag-line">Exquisitely personal, couture rings</div>
		</h1>
	</div>

	<div id="text-content">
		
		<p>Rings are very special adornments in that they’re the only jewelry a woman can see on herself without need of a mirror. They can be slipped on and off, turned. Touched and felt. Pressed against a cheekbone or thigh. </p>
		<p>And they can mark rites of passage. Remembrances. For as many reasons as a woman might choose a tattoo for her flesh, she might also invite designer Anat Kaplan to sculpt for her a ring. A secret. An important personal story. Women seek Anat to commemorate the significant milestones in their lives &ndash; a first child or miscarriage, self-marriage or exotic travels, a spiritual journey, a death, love affair or break-up. Or maybe it’s as simple as a reminder to breathe. To whisper a personal mantra. To stay centered in difficult times.</p>
		<p>To ensure the custom creations reflect the wearer’s essence and experience, Anat begins the process with a personal consultation. She develops a unique design that evokes a sentiment, aspiration, or occasion of importance to the client, then sculpts each original piece by hand to construct a beloved, signature piece for the owner’s collection.</p>
		<div class="v-space-15"></div>
		<div class="image-box"><img class="float-right" src="imgs/page_anouk_for_her/rings_staking250x170.jpg" width="250"/></div>
		<p class="tweek-1"><em>&ldquo;&nbsp;Jewelry should be more than just beautiful &ndash; it should have meaning. I’d like my clients to feel connected to something timeless and valuable, especially within themselves. The creation of an Anouk for Her piece is a journey for both me and the client, where we work together to distill the experience and translate it into evocative gems and metal, treasure realized.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
		<div class="v-space-15"></div>
		
		<p class="emphasis">Would you like to learn more about commissioning an Anouk for Her? Please <a href="contact.php" title="get in touch" alt="get in touch">get in touch</a> and we’ll schedule a first conversation.</p>
		
		

		
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



<?php
$htmlTitle="Anouk Jewelry - Unique Organic Handmade Custom Engagement Rings and Custom Wedding Bands by Toronto Designer";
$navTrail='CUSTOM';


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
			<div id="page-title">ANOUK CUSTOM</div>
			<div class="tag-line">Elegantly tailored for individuals</div>
		</h1>
	</div>

	<div id="custom-text-content">
		<p>Every piece from the Anouk Signature Collection can be tailored to individual tastes.</p>
		<p>Anat begins the collaborative process with an in-person consultation. Inspired by her clients’ desires and sensibilities, she will refine an existing design or design something entirely new and beautifully distinct. Anat then sculpts each piece by hand to construct an original, heirloom-quality work of fine-art jewelry.</p>
		<p>There will be no piece like it. Pure and intriguingly personal.</p>
		<div class="v-space-15"></div>
		<p class="tweek-1"><em>&ldquo;&nbsp;So many products in these times of consumption cater to fads and whims and lack quality and character. I want, instead, to encourage a lasting aesthetic, to return to the honoured tradition of bestowing valued heirlooms and treasures on generations to come, creating enduring pieces with substance and significance.&nbsp;&rdquo;</em>&nbsp;&nbsp;&nbsp;</p>
		<div class="v-space-15"></div>
		<div class="image-box-3"><img class="float-right" src="imgs/page_custom/custom_engagement_ring_aquamarine160x130.jpg" width="160"/></div>
		
		<p>Creating your custom jewelry begins with a conversation. Please <a href="contact.php" title="Contact" alt="Contact">get in touch</a> to tell us more about what you have in mind, and to ask any questions.</p>
		
		<p class="clear-both">Found the One? Find out about commissioning a unique <a href="wedding_customs.php" title="Wedding Customs" alt="Wedding Customs">custom engagement ring or wedding bands</a>&hellip;</p>
		

		
	</div>	
</div>	

<div class="image-box-1"><img src="imgs/page_custom/custom_engagement_ring_emeralds168x139.jpg" width="168"/></div>
<div class="image-box-2"><img src="imgs/page_custom/custom_statement_ring_ancient160x130.jpg" width="160"/></div>	


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



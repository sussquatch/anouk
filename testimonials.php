<?php
$htmlTitle="Anouk Jewelry - Organic Custom Jewellery Testimonials";
$navTrail='TESTIMONIALS';


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
					
					
<div id="page-title-box">
	<div id="page-logo"></div>
	<h1>
		<div id="page-title">ANOUK TESTIMONIALS</div>
	</h1>
</div>


<div id="page-content">
	
		<div id="left-column">	
		
				
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;The beautiful engagement ring Anat created for us is so unique and unlike anything else out there! My fiancee and I love it, I can't recommend Anat enough&hellip;&nbsp;&rdquo; </em></p>
			<p><strong>Mike Landry</strong></p>
			</div></div>	
		
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;<span class="inline-space-hack">&nbsp;</span>Outstanding artist, gorgeous, unique ring. It is particularly meaningful to me that this special ring was handmade by a Toronto artist. All the best Anat! Thank you so much!&nbsp;&rdquo; </em></p>
			<p><strong>Corrine Clark</strong></p>
			</div></div>
		
		
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;It was a true pleasure working with Anat on my special engagement ring. She was able to translate my ideas into art, and was so passionate about the process that I felt energized after each meeting with her. She truly cares about her work, and about her clients. I get a lot of compliments on my beautiful ring!  &nbsp;&rdquo; </em></p>
			<p><strong>Jenna</strong></p>
			</div></div>
			
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;Unbelievably beautiful! The ring is amazing and the moonstone is magical in appearance. I love my ring, it is just perfect - so crisp, clear and bright! Wonderful artist and a beautiful item!&nbsp;&rdquo; </em></p>
			<p><strong>Melanie</strong></p>
			</div></div>		
		
			
		
		
		</div>
		
		<div id="right-column">	
			
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;I absolutely LOVE my ring! It's more perfect than I imagined! Thank you so much! It's been so great working with you!&nbsp;&rdquo; </em></p>
			<p><strong>Janet Hupprich</strong></p>
			</div></div>
		
		
<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;Anat, thank you for the beautiful wedding band, the friendly and prompt communication, and for sharing your artwork with me. I am proud to wear a ring that is personal and unique, instead of one mass-produced at a factory. I have worn it every single day for a year now and I still love it as much as I did on day one.&nbsp;&rdquo; </em></p>
			<p><strong>Tammy Quady</strong></p>
			</div></div>
		
		
			<div class="testimonials-box"><div class="testimonials-box-inner">
			<p><em>&ldquo;&nbsp;I love my ring so much! The more I spend time with it, the more I appreciate your craftsmanship and creative genius! It's like it was smithed in a magical cave by elves or fairies! Its so much fun, I can't tell you how much I love it! Thank you thank you thank you!!&nbsp;&rdquo; </em></p>
			<p><strong>Cheridan</strong></p>
			</div></div>
		
		</div>

</div>	

<div class="image-box"><img src="imgs/page_testimonials/ancient_inspired_jewellery300x104.jpg" width="300"/></div>	


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



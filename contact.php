<?php
$htmlTitle="Anouk Jewelry - Contact Toronto Organic Custom Engagment Rings and Custom Jewellery Designer";
$navTrail='CONTACT';


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

<div class="left-column">
	
	<div id="page-title-box">
		<div id="page-logo"></div>
		<h1>
			<div id="page-title">CONTACT ANOUK</div>
		</h1>
	</div>

	<div id="contact-content">
		<ul>
			<li>For inquiries, domestic or international orders, or to book a consultation, please contact us directly:  </li>
			<li>Email: <a href="mailto:info@anoukjewelry.com" title="email" alt="email">info@anoukjewelry.com</a></li>
			<li>Phone: (+1) 647-456-7906 </li>
			<li>Toronto, Canada </li>
		</ul>
		<ul>
			<li>Anouk Jewelry is also available at:  
				<ul>
					<li><a href="http://www.madeyoulook.ca"  target="_blank" alt="www.madeyoulook.ca" title="www.madeyoulook.ca">Made You Look</a>, 1338 Queen Street West, Toronto </li>
					<li><a href="http://www.magpiejewellery.com" target="_blank" alt="www.magpiejewellery.com" title="www.magpiejewellery.com" >Magpie Jewellery</a>, 430 Richmond Road, Ottawa </li>
					<li><a href="http://www.galleryofjewels.com" target="_blank" alt="http://www.galleryofjewels.com" title="http://www.galleryofjewels.com">Gallery of Jewels</a>, 4089 24th Street, San Francisco</li>
				</ul>	
			</li>
		</ul>
		<ul>	
			<li style="width: 400px;">For news and latest designs connect with us on <a href="http://www.facebook.com/pages/Anouk-Jewelry/113533041996730?v=wall"  target="_blank" alt="facebook" title="facebook">Facebook</a>, <a href="http://twitter.com/#!/ANOUKbyAnat"  target="_blank" alt="twitter" title="twitter">Twitter</a>, and <a href="http://pinterest.com/anoukbyanat/"  target="_blank" alt="pinterest" title="pinterest">Pinterest</a>.</li>
		</ul>
	</div>	
</div>	

<div class="right-column"><img src="imgs/contact_page/wedding_engagement_rings350x157.jpg" width="350"/></div>	


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



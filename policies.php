<?php
$htmlTitle="Anouk Jewelry - Nature Inspired, Organic Custom Jewellery by Toronto Designer";
$navTrail='POLICIES';

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
		<div id="page-title">ANOUK POLICIES</div>
	</h1>
</div>


<div id="page-content">
	
				
			<div class="item-box"><div class="item-box-inner">
			<p><strong>Shipping</strong></p>
			<p>All items are shipped with Fedex or Canada Post within 3-6 weeks from order placement. If you need your jewelry sooner, please contact us and we will do our best to accommodate your timeline.</p>
			<p>International customers are responsible for all duties, taxes and customs fees.</p>
			</div></div>	
		
			<div class="item-box"><div class="item-box-inner">
			<p><strong>Payments</strong></p>
			<p>We accept credit card payments through PayPal, email transfers to info@anoukjewelry.com and personal checks (the order will be shipped once payment clears).</p>
			</div></div>
		
		
			<div class="item-box"><div class="item-box-inner">
			<p><strong>Returns</strong></p>
			<p>Our jewelry is 100% hand-crafted in Toronto, and are made to order, customized per your specifications. Therefore rings and custom orders are non-cancelable and non-refundable. All other items may be returned within 14 days of receipt, in its original condition, for exchange or credit. Shipping costs are non-refundable.</p>
			</div></div>
		
		
		
			<div class="item-box"><div class="item-box-inner">
			<p><strong>Taxes</strong></p>
			<p>All applicable taxes will be charged when ordering from Anouk Jewelry. In Canada the taxes are charged according to the province in which the customer resides. In Ontario 13% HST, British Columbia 12% HST, Nova Scotia 15% HST, New Brunswick 13% HST and Newfoundland 13% HST. All other provinces will be charged 5% GST. US and international orders are tax exempt.</p>
			</div></div>	

			<div class="item-box">
				<div class="item-box-inner">
					<p>
						<strong>Caring for your fine jewelry</strong>
					</p>
					<p>
						Your Anouk piece is designed to last a lifetime. However, even though precious metals are very durable, 
						they may still be scratched and damaged. To ensure longevity of your jewelry, we suggest removing it before 
						activities such as lifting weights, rock climbing, swimming, etc. as well as before using strong chemicals (chlorine, bleach, etc.)
					</p>
	 				<p>
						To clean your fine jewelry at home we recommend using a soft toothbrush, warm water and mild soap. 
						For deeper cleaning, you’re welcome to bring your piece to one of our retail locations. We encourage you to have your 
						jewelry checked on a yearly basis to ensure that the settings have not become loose.
					</p>
 				</div>
 			</div>

 			<div class="item-box">
				<div class="item-box-inner">
					<p>
						<strong>Warranty/Guarantee</strong>
					</p>
					<p>
						We take great care to select the finest quality materials and labour. 
						Anouk designer pieces are manufactured with the utmost attention to detail, and are carefully 
						inspected before leaving our hands. As a courtesy to our clients, we will repair or replace any 
						piece that we find to have been defective as a result of the manufacturing process, at no labour or material cost, 
						for one year from the purchase date.
					</p>
				</div>
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



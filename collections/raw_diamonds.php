<?php
$htmlTitle="Raw Diamonds Collections | Anouk Jewelry - Nature Inspired Engagement Ring by Toronto Custom Jewellery Designer;";
$navTrail='COLLECTIONS>RAW_DIAMONDS';
$dataDir="data/raw_diamonds/";
$jsonFile="raw_diamonds.json";



//* DON'T TOUCH THE FOLLOWING */

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
<?php include( $path . 'includes/gallery_page.inc.php'); ?>

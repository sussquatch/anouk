<?php
$htmlTitle="Necklaces Collections | Anouk Jewelry - Nature Inspired Engagement Ring by Toronto Custom Jewellery Designer;";
$navTrail='COLLECTIONS>NECKLACES';
$dataDir="data/necklaces/";
$jsonFile="necklaces.json";



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
<?php include( $path . 'includes/gallery_page.inc.php'); ?>

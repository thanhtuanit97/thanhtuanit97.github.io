<?php 
include_once("models/database/database.php");
$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)) {
			$action = "show_receipt";
		}
	}
switch ($action) {
	case 'show_receipt':
		include_once('views/receipts/receipts.php');
		break;
	
	default:
		// code...
		break;
}
 ?>
<?php 
$controller = filter_input(INPUT_POST, 'controller');
if(empty($controller)){
	$controller = filter_input(INPUT_GET, 'controller');
	if (empty($controller)) {
		$controller = 'main';
		
	}
}
switch ($controller) {
	case 'main':
		require_once('views/main/master.php');
		break;
	case 'book':
		require_once('controllers/c_book.php');
		break;
	case 'student':
		require_once('controllers/c_student.php');
		break;
	case 'categories':
		require_once('controllers/c_categories.php');
		break;
	case 'receipts':
		require_once('controllers/c_receipt.php');
		break;
	default:
		// code...
		break;
}
 ?>
<?php 
	include_once("models/categories/m_category.php");
	include_once("models/database/database.php");

	$action = filter_input(INPUT_POST, 'action');
	if (empty($action)) {
		$action = filter_input(INPUT_GET, 'action');
		if (empty($action)) {
			$action = "show_categories";
		}
	}

	switch ($action) {
		case 'show_categories':
		    $categoryDB= new categoryDB();
			$list_categories =$categoryDB->get_category();
			include_once("views/category/list_categories.php");
			break;
		case 'add_new':
			include_once('views/category/add_category.php');
			break;
		case 'save_category':
		$category = array();
		$category['categoryID'] = filter_input(INPUT_POST, 'categoryID');
		$category['categoryName'] = filter_input(INPUT_POST, 'categoryName');
		$category['Moreinfo'] = filter_input(INPUT_POST, 'Moreinfo');
		
		$categoryDB= new categoryDB();
		$categoryDB->add_category($category);
		$list_categories = $categoryDB->get_category();
		include_once('views/category/list_categories.php');
		
		break;
		case 'delete':
			$categoryID = filter_input(INPUT_GET, 'id');
		    $categoryDB= new categoryDB();
		    $categoryDB->delete_category($categoryID);
		    $list_categories = $categoryDB->get_category();
		   include_once('views/category/list_categories.php');
			break;
		case 'edit':

		$categoryID = filter_input(INPUT_GET, 'id');
		$categoryDB= new categoryDB();
		$category = $categoryDB->get_category();
		$category = $categoryDB->get_category_by_categoryID($categoryID);
		// print_r($list_students);
		include_once('views/category/update_category.php');
		break;
		case 'update_category':

		$category = array();
		$category['categoryID'] = filter_input(INPUT_POST, 'categoryID');
		$category['categoryName'] = filter_input(INPUT_POST, 'categoryName');
		$category['Moreinfo'] = filter_input(INPUT_POST, 'Moreinfo');
		
		
		$categoryDB= new categoryDB();
		$categoryDB->update_category($category);
		$list_categories = $categoryDB->get_category();
		include_once('views/category/list_categories.php');
		break;
		default:
			// code...
			break;
	}
 ?>
<?php 
include_once('models/database/database.php');
include_once('models/book/m_book.php');
include_once('models/categories/m_category.php');
	$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "show_books";
		}
	}
	switch ($action) {
		case 'show_books':
			$bookDB = new BookDB();
		    $list_books = $bookDB->get_books();
		// $list_books = get_books_by_category_ID('CSD');
		// $list_books = get_books_by_bookID('CSD002');
		    // print_r($list_books);
			include_once('views/book/list_books.php');
			break;
		case 'add_new':
		$categoryDB = new categoryDB();
		$categories = $categoryDB->get_category();
		include_once('views/book/add_book.php');
			
			break;

		case 'save_book':
			$book = array();
			$book['bookID'] = filter_input(INPUT_POST, 'bookID');
			$book['Name'] = filter_input(INPUT_POST, 'Name');
			$book['Publisher'] = filter_input(INPUT_POST, 'Publisher');
			$book['Author'] = filter_input(INPUT_POST, 'Author');
			$book['categoryID'] = filter_input(INPUT_POST, 'categoryID');
			$book['Numofpage'] = filter_input(INPUT_POST, 'Numofpage');
			$book['Maxdate'] = filter_input(INPUT_POST, 'Maxdate');
			$book['Num'] = filter_input(INPUT_POST, 'Num');
			$book['Summary'] = filter_input(INPUT_POST, 'Summary');
			$book['picture'] = filter_input(INPUT_POST, 'picture');

			//Xử lý ảnh lên Sever 
			$image_dir_path = getcwd().'/public/image'; //lay duong dan vat ly ve
			if (isset($_FILES['picture'])) { // kiem tra ng dung da chon hinh anh hay chua
				$filename = $_FILES['picture']['name'];
				if (!empty($filename)) {
					$source = $_FILES['picture']['tmp_name']; //duong dan nguon
					// tmp_name laf vung nho tam cu picture
					$target = $image_dir_path.'/'.$filename; //duong dan dich
					move_uploaded_file($source, $target);
					$book['picture'] = $filename;
				}
			}
			else {
				$book['picture']="";
			}
			$bookDB = new BookDB();
	        $bookDB->add_book($book);
            $list_books = $bookDB->get_books();
            include_once('views/book/list_books.php');
			
			break;
		case 'delete':
		    $bookID = filter_input(INPUT_GET, 'id');
		    $bookDB= new BookDB();
		    $bookDB->delete_book($bookID);
		    $list_books = $bookDB->get_books();
            include_once('views/book/list_books.php');
			break;
		case 'edit':
		 	$bookID = filter_input(INPUT_GET, 'id');
		 	$categoryDB= new categoryDB();
		 	$bookDB= new BookDB();
			$categories = $categoryDB->get_category();
			$book = $bookDB->get_books_by_bookID($bookID);
			// print_r($bookID);
			// print_r($book);
			include_once('views/book/update_book.php');
			break;
		case 'update_book':
			$book = array();
			$book['bookID'] = filter_input(INPUT_POST, 'bookID');
			$book['Name'] = filter_input(INPUT_POST, 'Name');
			$book['Publisher'] = filter_input(INPUT_POST, 'Publisher');
			$book['Author'] = filter_input(INPUT_POST, 'Author');
			$book['categoryID'] = filter_input(INPUT_POST, 'categoryID');
			$book['Numofpage'] = filter_input(INPUT_POST, 'Numofpage');
			$book['Maxdate'] = filter_input(INPUT_POST, 'Maxdate');
			$book['Num'] = filter_input(INPUT_POST, 'Num');
			$book['Summary'] = filter_input(INPUT_POST, 'Summary');
			$book['picture'] = filter_input(INPUT_POST, 'old_picture');

			
			//Xử lý ảnh lên Sever 
			$image_dir_path = getcwd().'/public/image'; //lay duong dan vat ly ve
			if (isset($_FILES['picture'])) { // kiem tra ng dung da chon hinh anh hay chua
				$filename = $_FILES['picture']['name'];
				if (!empty($filename)) {
					$source = $_FILES['picture']['tmp_name']; //duong dan nguon
					// tmp_name laf vung nho tam cu picture
					$target = $image_dir_path.'/'.$filename; //duong dan dich
					move_uploaded_file($source, $target);
					$book['picture'] = $filename;
				}
			}
			$bookDB= new BookDB();
			$bookDB->update_book($book);
			$list_books = $bookDB->get_books();
            include_once('views/book/list_books.php');
			break;
		case 'search_book':
			$search_value = filter_input(INPUT_POST, 'search_value');
			$bookDB= new BookDB();
			$list_books = $bookDB->search_book($search_value);
			include_once('views/book/list_books.php');
			break;
		default:
			// code...
			break;
	}
 ?>
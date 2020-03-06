<?php 
include_once('models/database/database.php');
include_once('models/student/m_student.php');
$action = filter_input(INPUT_POST, 'action');
	if(empty($action)){
		$action = filter_input(INPUT_GET, 'action');
		if(empty($action)){
			$action = "show_student";
		}
	}

switch ($action) {
	case 'show_student':
		$studentDB= new studentDB();
		$list_students = $studentDB->get_student();
		include_once('views/student/list_student.php');
		break;
	case 'add_new':
		include_once('views/student/add_student.php');
		
		break;
	case 'save_student':
		$student = array();
		$student['cardID'] = filter_input(INPUT_POST, 'cardID');
		$student['Name'] = filter_input(INPUT_POST, 'Name');
		$student['Address'] = filter_input(INPUT_POST, 'Address');
		$student['Tel'] = filter_input(INPUT_POST, 'Tel');
		$studentDB= new studentDB();
		$studentDB->add_student($student);
		$list_students = $studentDB->get_student();
		include_once('views/student/list_student.php');
		
		break;
	case 'delete':

		$cardID = filter_input(INPUT_GET, 'id');
		$studentDB= new studentDB();
		$studentDB->delete_student($cardID);
		$list_students = $studentDB->get_student();
		include_once('views/student/list_student.php');
		
		break;
	case 'edit':

		$cardID = filter_input(INPUT_GET, 'id');
		$studentDB= new studentDB();
		$student = $studentDB->get_student_by_cardID($cardID);
		// print_r($list_students);
		include_once('views/student/update_student.php');
		break;
	case 'update_student':

		$student = array();
		$student['cardID'] = filter_input(INPUT_POST, 'cardID');
		$student['Name'] = filter_input(INPUT_POST, 'Name');
		$student['Address'] = filter_input(INPUT_POST, 'Address');
		$student['Tel'] = filter_input(INPUT_POST, 'Tel');
		
		$studentDB= new studentDB();
		$studentDB->update_student($student);
		$list_students = $studentDB->get_student();
		include_once('views/student/list_student.php');
		break;
	case 'search_student':
			$search_value = filter_input(INPUT_POST, 'search_value');
			$studentDB= new studentDB();
			$list_students = $studentDB->search_student($search_value);
			include_once('views/student/list_student.php');
			break;
	default:
		// code...
		break;
}
 ?>
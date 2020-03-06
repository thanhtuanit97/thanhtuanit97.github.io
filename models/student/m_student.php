<?php 
class studentDB{
	public function get_student()
	{
		$db = Database::getDB();;
		try {
			
			$query = "select * from students";
		    $statement = $db->prepare($query);
		    $statement->execute();
		    $students = $statement->fetchAll();
		    return $students;
		} catch (Exception $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}

	public function get_student_by_cardID($id)
	{
		$db = Database::getDB();
		try {
			
			$query = "select * from students where cardID=?";
		    $statement = $db->prepare($query);
		    $statement->bindValue(1,$id);
		    $statement->execute();
		    $student = $statement->fetch();
		    return $student;
		} catch (Exception $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}
	public function add_student($student)
	{
		$db = Database::getDB();
		try {
			$query = 'INSERT INTO students(cardID, Name, Address, Tel) VALUES(?,?,?,?)';
			$statement = $db->prepare($query);
			$statement->bindValue(1, $student['cardID']);
			$statement->bindValue(2, $student['Name']);
			$statement->bindValue(3, $student['Address']);
			$statement->bindValue(4, $student['Tel']);

			$statement ->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}

	public function delete_student($cardID)
	{
		$db = Database::getDB();
		try {
			$query = 'DELETE FROM students WHERE cardID = ? ';
			$statement = $db->prepare($query);
			$statement->bindValue('1', $cardID);
			$statement ->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}
	public function update_student($student)
	{
		$db = Database::getDB();
		try {
			$query = 'UPDATE students SET Name=?, Address=?, Tel=? WHERE cardID=?';
			$statement = $db->prepare($query);
			
			$statement->bindValue(1, $student['Name']);
			$statement->bindValue(2, $student['Address']);
			$statement->bindValue(3, $student['Tel']);
			$statement->bindValue(4, $student['cardID']);

			$statement ->execute();
			$statement->closeCursor();
			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}
	public function search_student($search_value)
	{
		$db = Database::getDB();
		$search_value = '%'.trim($search_value).'%'; //dau % co nghia la tim rong rai, khong phai tim tuyet doi
		try {
			$query =  'SELECT * FROM students WHERE Name LIKE?  OR Address LIKE? OR Tel LIKE? ';
			$statement = $db->prepare($query);
			$statement->bindValue(1, $search_value);
			$statement->bindValue(2, $search_value);
			$statement->bindValue(3, $search_value);

			$statement ->execute();
			$result = $statement->fetchAll();
			$statement->closeCursor();
			return $result;

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}
}
	

	

	

	

	


	
 ?>
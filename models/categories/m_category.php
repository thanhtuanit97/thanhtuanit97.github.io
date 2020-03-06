<?php 
class categoryDB {
	public function get_category(){
		$db = Database::getDB();
		try {
			
			$query = "select * from catergories";
		    $statement = $db->prepare($query);
		    $statement->execute();
		    $categories = $statement->fetchAll();
		    return $categories;
		} catch (Exception $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
		
	}
	public function get_category_by_categoryID($id)
		{
			$db = Database::getDB();
			try {

				$query = "select * from catergories where categoryID=?";
				$statement = $db->prepare($query);
				$statement->bindValue(1,$id);
				$statement->execute();
				$category = $statement->fetch();
				return $category;
			} catch (Exception $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}

		}

	public static function add_category($category)
	{
		$db = Database::getDB();
		try {
			$query = 'INSERT INTO catergories(categoryID, categoryName, Moreinfo) VALUES(?,?,?)';
			$statement = $db->prepare($query);
			$statement->bindValue(1, $category['categoryID']);
			$statement->bindValue(2, $category['categoryName']);
			$statement->bindValue(3, $category['Moreinfo']);

			$statement ->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}	

	public static function delete_category($categoryID)
	{
		$db = Database::getDB();
		try {
			$query = 'DELETE FROM catergories WHERE categoryID = ? ';
			$statement = $db->prepare($query);
			$statement->bindValue('1', $categoryID);
			$statement ->execute();
			$statement->closeCursor();

		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}

	public function update_category($category)
	{
		$db = Database::getDB();
		try {
			$query = 'UPDATE catergories SET categoryName=?, Moreinfo=? WHERE categoryID=?';
			$statement = $db->prepare($query);
			
			
			$statement->bindValue(1, $category['categoryName']);
			$statement->bindValue(2, $category['Moreinfo']);
			$statement->bindValue(3, $category['categoryID']);

			$statement ->execute();
			$statement->closeCursor();
			
		} catch (PDOException $e) {
			$error_message = $e->getMessage();
			echo "Database error: $error_message ";
			exit();
		}
	}

	public function search_category($search_value)
	{
		$db = Database::getDB();
		$search_value = '%'.trim($search_value).'%'; //dau % co nghia la tim rong rai, khong phai tim tuyet doi
		try {
			$query =  'SELECT * FROM categories WHERE categoryID LIKE?  OR categoryName LIKE? OR Moreinfo LIKE? ';
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
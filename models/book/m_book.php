<?php 
// function get_books(){
// 	global $db;
// 	try {

// 		$query = "select * from books";
// 		$statement = $db->prepare($query);
// 		$statement->execute();
// 		$books = $statement->fetchAll();
// 		return $books;
// 	} catch (Exception $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}

// }	

// function get_books_by_category_ID($id)
// {
// 	global $db;
// 	try {

// 		$query = "select * from books where categoryID = :id";
// 		$statement = $db->prepare($query);
// 		$statement->bindValue(':id',$id);
// 		$statement->execute();
// 		$books = $statement->fetchAll();
// 		return $books;
// 	} catch (Exception $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}

// }	

// function get_books_by_bookID($id)
// {
// 	global $db;
// 	try {

// 		$query = "select * from books where bookID=?";
// 		$statement = $db->prepare($query);
// 		$statement->bindValue(1,$id);
// 		$statement->execute();
// 		$books = $statement->fetch();
// 		return $books;
// 	} catch (Exception $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}

// }	

// function add_book($book){
// 	global $db;
// 	try {
// 		$query = 'INSERT INTO books(bookID, Name, Publisher, Author, categoryID, Numofpage, Maxdate, Num, Summary, picture) VALUES(?,?,?,?,?,?,?,?,?,?)';
// 		$statement = $db->prepare($query);
// 		$statement->bindValue(1, $book['bookID']);
// 		$statement->bindValue(2, $book['Name']);
// 		$statement->bindValue(3, $book['Publisher']);
// 		$statement->bindValue(4, $book['Author']);
// 		$statement->bindValue(5, $book['categoryID']);
// 		$statement->bindValue(6, $book['Numofpage']);
// 		$statement->bindValue(7, $book['Maxdate']);
// 		$statement->bindValue(8, $book['Num']);
// 		$statement->bindValue(9, $book['Summary']);
// 		$statement->bindValue(10, $book['picture']);

// 		$statement ->execute();
// 		$statement->closeCursor();

// 	} catch (PDOException $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}
// }

// function delete_book($bookID)
// {
// 	global $db;
// 	try {
// 		$query = 'DELETE FROM books WHERE bookID = ? ';
// 		$statement = $db->prepare($query);
// 		$statement->bindValue('1', $bookID);
// 		$statement ->execute();
// 		$statement->closeCursor();

// 	} catch (PDOException $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}

// }

// function update_book($book){
// 	global $db;
// 	try {
// 		$query = 'UPDATE books SET Name=?, Publisher=?, Author=?, categoryID=?, Numofpage=?, Maxdate=?, Num=?, Summary=?, picture=? WHERE bookID=?';
// 		$statement = $db->prepare($query);

// 		$statement->bindValue(1, $book['Name']);
// 		$statement->bindValue(2, $book['Publisher']);
// 		$statement->bindValue(3, $book['Author']);
// 		$statement->bindValue(4, $book['categoryID']);
// 		$statement->bindValue(5, $book['Numofpage']);
// 		$statement->bindValue(6, $book['Maxdate']);
// 		$statement->bindValue(7, $book['Num']);
// 		$statement->bindValue(8, $book['Summary']);
// 		$statement->bindValue(9, $book['picture']);
// 		$statement->bindValue(10, $book['bookID']);

// 		$statement ->execute();
// 		$statement->closeCursor();

// 	} catch (PDOException $e) {
// 		$error_message = $e->getMessage();
// 		echo "Database error: $error_message ";
// 		exit();
// 	}
// }

// function search_book($search_value)
// {
// 	global $db;
// 		$search_value = '%'.trim($search_value).'%'; //dau % co nghia la tim rong rai, khong phai tim tuyet doi
// 		try {
// 			$query =  'SELECT * FROM books WHERE Name LIKE?  OR Publisher LIKE? OR Author LIKE? OR Summary LIKE?';
// 			$statement = $db->prepare($query);
// 			$statement->bindValue(1, $search_value);
// 			$statement->bindValue(2, $search_value);
// 			$statement->bindValue(3, $search_value);
// 			$statement->bindValue(4, $search_value);

// 			$statement ->execute();
// 			$result = $statement->fetchAll();
// 			$statement->closeCursor();
// 			return $result;

// 		} catch (PDOException $e) {
// 			$error_message = $e->getMessage();
// 			echo "Database error: $error_message ";
// 			exit();
// 		}
// 	}
	
	class BookDB{
		public function get_books()
		{
			$db = Database::getDB();
			try {

				$query = "select * from books";
				$statement = $db->prepare($query);
				$statement->execute();
				$books = $statement->fetchAll();
				return $books;
			} catch (Exception $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}
			
		}

		public function get_books_by_category_ID($id)
		{
			$db = Database::getDB();
			try {

				$query = "select * from books where categoryID = :id";
				$statement = $db->prepare($query);
				$statement->bindValue(':id',$id);
				$statement->execute();
				$books = $statement->fetchAll();
				return $books;
			} catch (Exception $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}

		}

		public function get_books_by_bookID($id)
		{
			$db = Database::getDB();
			try {

				$query = "select * from books where bookID=?";
				$statement = $db->prepare($query);
				$statement->bindValue(1,$id);
				$statement->execute();
				$books = $statement->fetch();
				return $books;
			} catch (Exception $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}

		}

		public function add_book($book)
		{
			$db = Database::getDB();
			try {
				$query = 'INSERT INTO books(bookID, Name, Publisher, Author, categoryID, Numofpage, Maxdate, Num, Summary, picture) VALUES(?,?,?,?,?,?,?,?,?,?)';
				$statement = $db->prepare($query);
				$statement->bindValue(1, $book['bookID']);
				$statement->bindValue(2, $book['Name']);
				$statement->bindValue(3, $book['Publisher']);
				$statement->bindValue(4, $book['Author']);
				$statement->bindValue(5, $book['categoryID']);
				$statement->bindValue(6, $book['Numofpage']);
				$statement->bindValue(7, $book['Maxdate']);
				$statement->bindValue(8, $book['Num']);
				$statement->bindValue(9, $book['Summary']);
				$statement->bindValue(10, $book['picture']);

				$statement ->execute();
				$statement->closeCursor();

			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}
		}

		public function delete_book($bookID)
		{
			$db = Database::getDB();
			try {
				$query = 'DELETE FROM books WHERE bookID = ? ';
				$statement = $db->prepare($query);
				$statement->bindValue('1', $bookID);
				$statement ->execute();
				$statement->closeCursor();

			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}

		}	

		public function update_book($book)
		{
			$db = Database::getDB();
			try {
				$query = 'UPDATE books SET Name=?, Publisher=?, Author=?, categoryID=?, Numofpage=?, Maxdate=?, Num=?, Summary=?, picture=? WHERE bookID=?';
				$statement = $db->prepare($query);

				$statement->bindValue(1, $book['Name']);
				$statement->bindValue(2, $book['Publisher']);
				$statement->bindValue(3, $book['Author']);
				$statement->bindValue(4, $book['categoryID']);
				$statement->bindValue(5, $book['Numofpage']);
				$statement->bindValue(6, $book['Maxdate']);
				$statement->bindValue(7, $book['Num']);
				$statement->bindValue(8, $book['Summary']);
				$statement->bindValue(9, $book['picture']);
				$statement->bindValue(10, $book['bookID']);

				$statement ->execute();
				$statement->closeCursor();

			} catch (PDOException $e) {
				$error_message = $e->getMessage();
				echo "Database error: $error_message ";
				exit();
			}
		}

		public function search_book($search_value)
		{
			$db = Database::getDB();
		$search_value = '%'.trim($search_value).'%'; //dau % co nghia la tim rong rai, khong phai tim tuyet doi
		try {
			$query =  'SELECT * FROM books WHERE Name LIKE?  OR Publisher LIKE? OR Author LIKE? OR Summary LIKE?';
			$statement = $db->prepare($query);
			$statement->bindValue(1, $search_value);
			$statement->bindValue(2, $search_value);
			$statement->bindValue(3, $search_value);
			$statement->bindValue(4, $search_value);

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
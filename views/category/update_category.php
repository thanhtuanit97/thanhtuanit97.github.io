<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Update Category</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			form {
				width: 70%;
				padding-left: 250px;

			}
			body {
				background-color: #00bcd45c;
				
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Update Category</h1>
		<a href="?controller=category">
				<button type="button" class="btn btn-info">Back</button>
			</a>

		<form action="" method="POST" role="form" enctype="multipart/form-data">
		
			<div class="form-group">

				<label for="">CategoryID : </label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="categoryID" readonly="" value="<?php echo $category['categoryID'] ?>">

				<label for="">CategoryName : </label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="categoryName" value="<?php echo $category['categoryName'] ?>" >

				<label for="">Moreinfo : </label>
				<input type="text" class="form-control" id="" placeholder="Input field" name="Moreinfo" value="<?php echo $category['Moreinfo'] ?>">

				

				

				
			</div>
		
			<button name="action" value="update_category" type="submit" class="btn btn-primary">UPDATE CATEGORY</button>
		</form>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>
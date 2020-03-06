<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List Categories</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
			.timkiem{
				border: 1px solid navy;
				padding: 10px;
				width: 300px;
				float: right;
			}
			body {
				background-color: #00bcd45c;
				
			}
		</style>
	</head>
	<body>

		<div class="container">
			
		
		
		
			<h1 class="text-center">LIST CATEGORIES</h1>

			<a href="?controller=main">
				<button type="button" class="btn btn-info">Home</button>
			</a>

			<a href="?controller=categories">
				<button type="button" class="btn btn-info">Back</button>
			</a>
			
			
			<form action="" method="POST">
			<div class="row">
				<div class="col-md-8">
					<input type="search" name="search_value" id="inputSearch_value" class="form-control" value="" title="">
				</div>
				<div class="col-md-4">
					<button type="submit" name="action" value="search_book" class="btn btn-default">Search</button>
				</div>

			</div>
		  </form>
			<!-- <div class="timkiem">
				<form action="" method="POST" role="form">
					<input name="search_value" type="text" class="form-control" id="" placeholder="Nhập từ khóa tìm kiếm..." style="width: 190px;"><br>

					<button style="float: right;margin-top: -33px;" type="submit" name="action" value="search_customer" class="btn btn-primary">Search</button>
				</form>
			</div> -->
            <br>
			<div class="table-responsive">
				
				<table class="table table-hover">
					<thead>
						<tr>
							<th>CategoriesID</th>
							<th>CategoriesName</th>
							<th>MoreInfo</th>
							
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($list_categories as $key => $value): ?>
						<tr>
							<td><?php echo $value['categoryID'] ?></td>
							<td><?php echo $value['categoryName'] ?></td>
							<td><?php echo $value['Moreinfo'] ?></td>
		
							<td><a href="?controller=categories&action=delete&id=<?php echo $value['categoryID']; ?>">
									<button type="button" class="btn btn-info">Delete</button>
								</a></td>
								<td><a href="?controller=categories&action=edit&id=<?php echo $value['categoryID']; ?>">
									<button type="button" class="btn btn-info">Update</button>
								</a></td>
							
						</tr>
						<?php endforeach ?>
						
						<tr>

						<td><a href="?controller=categories&action=add_new"><button  type="button"  class="btn btn-info">ADD</button></a></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="Hello World"></script>
	</body>
	</html>
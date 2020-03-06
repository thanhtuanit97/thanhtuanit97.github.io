<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add new brrow book</title>

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
				width: 50%;
				padding-left: 50px;

			}
			body {
				background-color: #00bcd45c;
				
			}
		</style>
	</head>
	<body>
		<h1 class="text-center">Add new brrow book</h1>
		<div class="container">
			<label for="">CardID :</label>
			<input type="text" name="cardID">
			<br>

			<label for="">BookID :</label>
			<input type="text" name="bookID">
			<br>
			<button type="button" class="btn btn-success">ADD</button>

			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th colspan="2">CardID:</th>
							<th colspan="2">Student Name:</th>
							<th colspan="2">Address:</th>
						</tr>
						<tr>
							<th>No :</th>
							<th>BookID :</th>
							<th>Book Name :</th>
							<th>Author :</th>
							<th>Publisher :</th>
							<th>Dateborrow :</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td></td>
						</tr>
					</tbody>
				</table>
				<button type="button" style="float: right;" class="btn btn-success">BRROW</button>
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
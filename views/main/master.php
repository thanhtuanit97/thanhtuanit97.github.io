<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hệ Thống Sách</title>

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
			.container {
				width: 20%;
				padding-top:2em;
			}
			h1{
				padding-top: 45px;
			}
			body {
				background-color: #00bcd45c;
				
			}
		</style>
	</head>
	<body>

		<h1 class="text-center">HỆ THỐNG QUẢN LÝ SÁCH THƯ VIỆN</h1>
		<div class="container">
			
			<ul class="list-group">
				<a href="?controller=book"><li class="list-group-item">Quản Lý Thông tin Sách</li></a>
				<a href="?controller=student"><li class="list-group-item">Quản Lý Sinh Viên</li></a>
				<a href="?controller=categories"><li class="list-group-item">Quản Lý Thể Loại</li></a>
				<a href="?controller=receipts"><li class="list-group-item">Quản Lý Mượn Trả</li></a>
			</ul>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="Hello World"></script>
	</body>
	</html>
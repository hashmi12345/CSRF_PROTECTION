<html>
	<head>
		<title> CSRF protection</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</head>
	<body style=" background-color: #1d2c4a;">
		<br>
		<div align='center'>
			<a href="stplogin.php" class="button"><button style="margin-top: 250px;color: #fff;background-color: #b93e3e;border-color: #000000" type="submit" class="btn btn-success" id="syn" name="syn" >CSRF protection by Syncronize Token pattern </button></a>
		</div>
		<br>
		<div align='center'>
			<a href="dsclogin.php" class="button"><button style="margin-top: 20px;color: #000; background-color: #74997e;border-color: #000000;" type="submit" class="btn btn-info" id="dsc" name="dsc"> CSRF protection by double submit cookies </button></a>
		</div>
	</body>
</html>
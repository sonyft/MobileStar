<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
	<title>Търси</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
	<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<?php include 'menu.php';?>
		<form action="search.php" method="post">
			<div class="content centerText">
				<br><h3>Търсене по параметри</h3><br><br><hr><br>
				<input type="text" name="Camera" placeholder="Camera"><br>
				<input type="text" name="CPU" placeholder="CPU"><br>
				<input type="text" name="RAM" placeholder="RAM"><br>
				<input type="text" name="OS" placeholder="OS"><br>
				<input type="text" name="Memory" placeholder="Memory"><br>
				<br><br>
				<input type="submit" value="Search">
			</div>
		</form>
	</div>
<body>
</html>
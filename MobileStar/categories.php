<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Категории</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main" >
	<?php include 'menu.php';?>	
	<br>	
	<div class="con1" style="margin-left: 12%;">
		<center><h5 style="color: white;">Android</h5></center><hr>
		<?php
		include 'dbcon.php';//connect to Db
		$sql = "SELECT * FROM mobile WHERE OS = 'Android' AND del_rec = 0 ORDER BY Brand";
		include 'sortcat.php';?>	
	</div>
	<div class="con1">
		<center><h5 style="color: white;">iOS</h5></center><hr>
		<?php
		include 'dbcon.php';
		$sql = "SELECT * FROM mobile WHERE OS = 'iOS' AND del_rec = 0 ORDER BY Brand";
		include 'sortcat.php';?>
	</div>
	
	</div>
</div> 
</body>
</html>
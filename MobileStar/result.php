<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Mobile</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<div class="content">
		<?php
		//connect to Db
		include 'dbcon.php';
		$id=$_GET["id"];
		$img_id=$_GET["img_id"];
		$sql = "SELECT * FROM mobile WHERE aa LIKE $id";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();//
		$rec_uid=$row["rec_uid"];//from db
		?>
		<div class="font">
			<center><h2><?php echo $row["Brand"];?></h2></center>
		</div>
		<div class="con1" style="margin-left: 50px;">
			<img src="uploads/<?php echo $img_id?>" alt="no image" style="margin-top:42px;margin-left:12px; width:320px;height:200px;vertical-align: middle;">
		</div>
		<div class="con2" >
			<h5>Спецификации:</h5>
			<hr>
			<br><h6>Камера:
			<?php echo $row["Camera"]; ?></h6>
			<br><h6>CPU:
			<?php echo $row["CPU"]; ?></h6>
			<br><h6>RAM:
			<?php echo $row["RAM"]; ?></h6>
			<br><h6>Памет:
			<?php echo $row["Memory"]; ?></h6>
		</div>
		<div class="cent" style="margin-left: 50px;">
			<br><h5>Информация:<hr>
			<?php echo $row["instructions"]; ?></h5>
		</div>
		<br>
		<div class="cent" style="margin-left: 50px;">
		<?php 
			if ($rec_uid==$_SESSION['userid']){
				?>
			<form action="confirmdel.php" method="POST">
				<input type="hidden" name="idconfirm" value="<?php echo $id ?>">
				<input type="submit" name="delete_rec" value="Delete">
			</form>
		<?php
			}
		?>
		</div>
	</div>
</div>
</body>
</html>
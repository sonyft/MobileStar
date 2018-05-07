<?php
  error_reporting(E_ALL & ~E_NOTICE);
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
<form action="index.php" method="post" enctype="multipart/form-data">
<br>
<h4><center>Сортирай по: <select name="sort" value="0">
  <option value="0">Избери...</option>
  <option value="1">Камера &uarr; </option>
  <option value="2">Камера низходящо &darr;</option>
  <option value="3">Категория &uarr;</option>
  <option value="4">Категория низходящо &darr;</option>
</select> <input type="submit"  value="OK"></center></h4>
</form>
<?php
if (isset($_POST['sort']))	{
	$sort = $_POST['sort'];
}else{
	$sort=0;
}
//Changing the query order by the users choice
//del_rec is to mark the deleted mobile
if($sort==0){
$sql = "SELECT * FROM mobile WHERE del_rec = 0";}
else if($sort==1){
$sql = "SELECT * FROM mobile WHERE del_rec = 0 ORDER BY Camera ";}
else if($sort==2){
$sql = "SELECT * FROM mobile WHERE del_rec = 0 ORDER BY Camera DESC";}
else if($sort==3){
$sql = "SELECT * FROM mobile WHERE del_rec = 0 ORDER BY OS";}
else if($sort==4){
$sql = "SELECT * FROM mobile WHERE del_rec = 0 ORDER BY OS DESC";}
?>
<h3><center>mobile</center></h3><br>
<hr>
<br>
<?php
//for database
include 'dbcon.php';//connect to Db
//shows all rows
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aa"];
    $img_id = $row["image_id"];
?>
<div class=" cent linkStyle" style="margin-left: 75px;">
<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:180px;height:100px;vertical-align: middle;"><h3><?php echo $row["name"];?></h3></a> 
<div style="display: inline; float: right;vertical-align: middle; text-align: left;"><br><br><h6>Камера: <?php echo $row["Camera"];?> </h6> <br> <h6>OS: <?php echo $row["OS"];?></h6></div>
<br>
<br>
<hr>
</div>
<?php    
    }//end while
}//end if
else {
?>
<center>0 смартфони.</center>
<?php
}
$conn->close();
?>
</div>
</div>
</body>
</html>
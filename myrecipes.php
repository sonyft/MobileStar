<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");
}
?>
<html>
<head>
<title>My phones</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
<?php include 'menu.php';?>
<div class="content">
<h3 style="color: white;"><center>Моите телефони</center></h3><br>
<hr>
<br>
<?php
//for database
include 'dbcon.php';//connect to Db
//shows all rows
$rec_uid=$_SESSION['userid'];
$sql = "SELECT * FROM mobile WHERE del_rec = 0 and rec_uid = $rec_uid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    $id = $row["aa"];
    $img_id = $row["image_id"];
?>
<div class=" cent linkStyle" style="margin-left: 75px;">
<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:180px;height:100px;vertical-align: middle;"><h3><?php echo $row["Brand"];?></h3></a> 
<div style="display: inline; float: right;vertical-align: middle; text-align: left;"><br><br><h6 style="color: white;">Спецификации: <?php echo $row["Camera"];?></h6> <br> <h6>OS: <?php echo $row["OS"];?></h6></div>
<br>
<br>
<hr>
</div>
<?php    
    }//end while
}//end if
else {
?>
<center style="color: white;">0 смарфони.</center>
<?php
}
$conn->close();
?>
</div>
</div>
</body>
</html>


</body>
</html>

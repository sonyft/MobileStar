<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>

<head>
<title>Добави телефон</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
	<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript">
		var i=1;
		function addIngr()
		{
			if (i<=15)
			{
				i++;
				var div = document.createElement('div');
				div.innerHTML = ' <input type="text" name="ingr'+i+'" placeholder="'+i+'" ><input type="button" value="-" onclick="removeIngr(this)">';
				document.getElementById('ingrs').appendChild(div);

			}
		}
		function removeIngr(div)
		{	
    	document.getElementById('ingrs').removeChild( div.parentNode );
		i--;
		}
		
	</script>
</head>
<body>
<div class="main">
	<?php include 'menu.php';?>
	<form action="addDB.php" method="post" enctype="multipart/form-data">
	<div class="content" style="margin-botton: 200px;">
		<br><h3 style="color: white;"><center>Добави телефон</center></h3><br><hr><br>
		<h4 style="color: white;">Модел: <input type="text" name="name" required></h4><br><br>
		<h4 style="color: white;">Категория:
		<select name="category" required>
  			<option value="" style="color: white;">Избери...</option>
  			<option value="Android" style="color: blue;" >Android</option>
  			<option value="iOS" style="color: blue;" >iOS</option>
  			
		</select>
		<div class="con1" style="color: white;"><br>
			<h4 style="color: white;"> Информация:</h4>
		​	<textarea id="steps" rows="20" cols="50" name="instr" fixed required></textarea><br>
			<input type="file" name="image">
			<input type="submit" value="Save">
		</div>
		<div class=" con2">
			<br>
			<div id=ingrs>
				<input type="text" name="Camera" placeholder="Camera" required> 
			</div>
			<div id=ingrs>
				<input type="text" name="CPU" placeholder="CPU" required> 
			</div>
			<div id=ingrs>
				<input type="text" name="RAM" placeholder="RAM" required> 
			</div>
			<div id=ingrs>
				<input type="text" name="Memory" placeholder="Memory" required> 
			</div>
		</div>
	</div>
	
	</form>

	
</div>


<body>
</html>
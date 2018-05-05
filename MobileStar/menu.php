<link rel="stylesheet" type="text/css" href="style.css">

<div class="nav">	
	<ul>
 		<li><a href="index.php">Начало</a></li>
 		<li><a href="categories.php">Категории</a></li>
  		<li><a href="addrecipe.php">Добави обява</a></li>
  		<li><a href="searchview.php">Търси</a></li>

		</ul>	
		<div class="welcome" style="float:right;margin-right:20px; font-size: 20px;">
	<?php 
	if (isset($_SESSION['firstn'])){
	?>Здравейте, <?php echo $_SESSION['firstn'] ." ". $_SESSION['lastn'];
	}else{?><?php
	}
	?>
</div>
<br>
<?php
	if (!isset($_SESSION['login'])){?>
	<hr>
	<span class="linkStyle" style="text-align: center;"><a href="loginview.php"><img src="./img/enter.png" style="float:left;width:42px;height:42px;" alt="Workplace" usemap="#workmap">
Вход</a><a href="register.php" style="padding-left:50px;"><img src="./img/register.png" style="float:left;width:42px;height:35px;" alt="Workplace" usemap="#workmap">Регистрация</a></span>

<?php 
}?>
<br>
	<div class="login" style="font-size: 15px;  float:right; margin-top: -130px;">
	  <?php
		if (isset($_SESSION['login'])){
			echo "<a href=\"myrecipes.php\" style='margin-left: 13px;'><h3><u>My Phones</u></h3></a>";
			echo "<a href=\"logout.php\" style='margin-left: 19px;'>Изход</a>";
		}else{
			// echo "<a href=\"loginview.php\">Вход</a>";
			// echo "<span style='text-align: center;'><a href='register.php'>Регистрирай се!</a></span>";

		}
	  ?>
	</div>
</div>

<br>





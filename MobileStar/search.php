<?php
session_start();
if ($_SESSION['login']!="TRUE"){
  header("Location: loginview.php");

}
?>
<html>
<head>
<title>Търсене</title>
<link rel="shortcut icon" type="image/x-icon" href="img/tabicon.ico">
<meta  http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="clearfix main">
	<?php include 'menu.php';?>
	<div class="content ">
		<br><h3><center>Резултати от търсенето</center></h3><br><hr>
		<?php
		if($search_camera = $_POST['Camera'])
		{
		//connect to DataBase
		include 'dbcon.php';
		$sql = "SELECT * FROM mobile WHERE Camera='$search_camera' AND del_rec = 0";
		//del_rec=0 
		$result = $conn->query($sql);
		if($result->num_rows > 0) {  
    		while($row = $result->fetch_assoc()) {
    			$id = $row["aa"];
				  $img_id = $row["image_id"];
			
		?>
		<br>
		<div class="linkStyle cent" style="margin-left: 75px;">
			<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["Brand"];?></a> 
			<br><br><hr>
		</div>
		<?php    
    		}//end while  
			}
			}
		else 
		if($search_cpu = $_POST['CPU'])
		{
			//connect to DataBase
			include 'dbcon.php';
			$sql = "SELECT * FROM mobile WHERE CPU='$search_cpu' AND del_rec = 0";
			//del_rec=0 
			$result = $conn->query($sql);
			if($result->num_rows > 0) 
				{  
				while($row = $result->fetch_assoc()) 
					{
					$id = $row["aa"];
					  $img_id = $row["image_id"];
				
			?>
			<br>
			<div class="linkStyle cent" style="margin-left: 75px;">
				<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["Brand"];?></a> 
				<br><br><hr>
			</div>
			<?php    
					}//end while  
				}
			}
		else 
		if($search_ram = $_POST['RAM'])
		{
			//connect to DataBase
			include 'dbcon.php';
			$sql = "SELECT * FROM mobile WHERE RAM='$search_ram' AND del_rec = 0";
			//del_rec=0 
			$result = $conn->query($sql);
			if($result->num_rows > 0) 
				{  
				while($row = $result->fetch_assoc()) 
					{
					$id = $row["aa"];
					  $img_id = $row["image_id"];
				
			?>
			<br>
			<div class="linkStyle cent" style="margin-left: 75px;">
				<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["Brand"];?></a> 
				<br><br><hr>
			</div>
			<?php    
					}//end while  
				}
			}

			
			else 
			if($search_os = $_POST['OS'])
				{
					//connect to DataBase
					include 'dbcon.php';
					$sql = "SELECT * FROM mobile WHERE OS='$search_os' AND del_rec = 0";
					//del_rec=0 
					$result = $conn->query($sql);
					if($result->num_rows > 0) 
						{  
						while($row = $result->fetch_assoc()) 
							{
							$id = $row["aa"];
							  $img_id = $row["image_id"];
						
					?>
					<br>
					<div class="linkStyle cent" style="margin-left: 75px;">
						<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["Brand"];?></a> 
						<br><br><hr>
					</div>
					<?php    
							}//end while  
						}
					}

					else 
			if($search_memory = $_POST['Memory'])
				{
					//connect to Db
					include 'dbcon.php';
					$sql = "SELECT * FROM mobile WHERE Memory='$search_memory' AND del_rec = 0";
					//del_rec=0 
					$result = $conn->query($sql);
					if($result->num_rows > 0) 
						{  
						while($row = $result->fetch_assoc()) 
							{
							$id = $row["aa"];
							  $img_id = $row["image_id"];
						
					?>
					<br>
					<div class="linkStyle cent" style="margin-left: 75px;">
						<a href="result.php?id=<?php echo $id?>&img_id=<?php echo $img_id?>"><img src="uploads/<?php echo $img_id?>" alt="no image" style="margin:5px;width:100px;height:65px;vertical-align: middle;"><?php echo $row["Brand"];?></a> 
						<br><br><hr>
					</div>
					<?php    
							}//end while  
						}
					}

		

		
		
		?>
		<center>No phone.</center>
		<?php   
		
		$conn->close();
	?>
	</div>
</div>
</body>
</html>
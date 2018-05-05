<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobiledb";
//------------------------------------------
//δημιουργια database
$conn = new mysqli($servername,$username,$password);

if ($conn->connect_error){
	die("con fail: ". $conn->connect_error);
}

$sql = "CREATE DATABASE mobiledb";
if($conn->query($sql) === TRUE){
	echo "The database has been created. ";
}else {
	echo "Error";
}
$conn->close();
//----------------------------------------
//Creation of table recipes
$conn = new mysqli($servername, $username, $password, $dbname);
// Connection check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sqlt = "CREATE TABLE mobile(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
Brand TEXT NOT NULL,
instructions TEXT NOT NULL,
Camera TEXT NOT NULL,
CPU TEXT NOT NULL,
RAM TEXT NOT NULL,
Model TEXT NOT NULL,
Memory TEXT NOT NULL,
image_id TEXT NOT NULL,
del_rec TINYINT(1) NOT NULL,
OS TEXT NOT NULL,
rec_uid INT(11) NOT NULL
#FULLTEXT(ingr1)
)";

$sqlt2 = "CREATE TABLE users(
aa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstn TEXT NOT NULL,
lastn TEXT NOT NULL,
email TEXT NOT NULL,
username TEXT NOT NULL,
passw TEXT NOT NULL
)";

if ($conn->query($sqlt) === TRUE && $conn->query($sqlt2) === TRUE) {
    echo " The tables have been created.";
} else {
    echo "Error" . $conn->error;
}


$conn->close();
//------------------------------------------


?>
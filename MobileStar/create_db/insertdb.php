<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobiledb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("conn error");
}
$sql = "INSERT INTO `mobile` ( `Brand`, `instructions`, `Camera`, `CPU`, `RAM`, `Model`, `Memory` ,`image_id`, `del_rec`, `OS`,`rec_uid`) VALUES


if ($conn->query($sql) === TRUE) {
    echo "Submission successful.";
} else {
    echo "Error " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error){
	die("conn error");
}
$sql_users= "INSERT INTO `users` (`firstn`, `lastn`, `email`, `username`, `passw`) VALUES
('Lefteris', 'Charalambidis', 'email@mail.com', 'admin', 'admin'),
('John', 'Kapsalas', 'mail@mail.com', 'admin2', 'admin2')
 ";

if ($conn->query($sql_users) === TRUE) {
    echo "Submission successful.";
} else {
    echo "Error " . $conn->error;
}
$conn->close();

?>

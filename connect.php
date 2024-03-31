<?php
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli( 'localhost','root','','abc');
if($conn->connect-error) 
{
die('connection Failed : '.$conn->connect_error);
}
else{
$stmt = $conn->prepare("insert into registeration(email, password) values(?,?)");

$stmt->bind_param("ss",$email, $password);
$stmt->execute();

echo"registeration sucessfully";
$stmt->close();
$conn->close();
}
?>
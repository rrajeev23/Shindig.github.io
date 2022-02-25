<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'project';

$conn = mysqli_connect($servername,$username,$password,$dbname);
$em = $_POST['email'];
$pass=$_POST['password'];
$query="select Password from Login_data where Email='$em'";
$data=mysqli_query($conn, $query);
$result=mysqli_fetch_assoc($data);
if($result['Password']==$pass)
{
	echo"Login Successfully";
}
else
	echo"failed";

?>

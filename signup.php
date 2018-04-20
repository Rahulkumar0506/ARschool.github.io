<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="INSERT INTO signup(username,email,password) VALUES('".$uname."','".$email."','".$pass."')";
$conn = mysqli_connect('localhost','root','','mydatabase');
mysqli_query($conn,$sql)
	or die(mysql_error($conn));
mysqli_close($conn);
header("Location:index.php");
?>
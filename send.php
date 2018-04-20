<?php
session_start();
//include'dbh.php';
$msg=$_POST['msg'];
$name=$_SESSION['name'];
$sql="insert into posts(msg,name)values('".$msg."','".$name."')";
$conn = mysqli_connect('localhost','root','','mydatabase');
mysqli_query($conn,$sql)
	or die(mysql_error($conn));
mysqli_close($conn);

header("Location:home.php");
?>
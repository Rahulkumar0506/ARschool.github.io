<?php
session_start();
?>
<html>
<head>
<title>
</title>
<link rel="stylesheet"type="text/css"href="home.css">
</head>
<body>
<div id="main">
<h1 style="background-color:white;color:black;"><?php echo $_SESSION['name'] ?>-online</h1>	
</div>
<div class="output">
<?php 
	$conn = mysqli_connect('localhost','root','','mydatabase');
	$sql="SELECT * FROM posts";
	$result=$conn->query($sql);
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
			echo $row['date']."::".$row['name']."::".$row["msg"];
			echo "<br>";
		}
   }else{
		echo "0 result";
	}
	$conn->close();
	?>
	</div>


<form method="post"action="send.php">
<textarea name="msg"placeholder="type to send message........"class="form-control">
</textarea><br>
<input type="submit"value="comment">
</form>
<br>

	
<form action="logout.php">
<input style="width:100%;background-color:blue;color:balck;font-size:20px"type="submit"value="logout">
</form>

</body>
</html>
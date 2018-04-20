<?php
$user=filter_input(INPUT_POST,'firstname');
$email=filter_input(INPUT_POST,'email');
$idno=filter_input(INPUT_POST,'idno');
$password=filter_input(INPUT_POST,'password');

if(!empty($user)){
	//echo $user;
	if(!empty($password)){
     	$host="localhost";
     	$dbuser="root";
     	$dbpass="";
     	$dbname="faculty";
 		$conn=new mysqli($host,$dbuser,$dbpass,$dbname);
 		if(mysqli_connect_error()){
 			die("Connect Error(!mysqli_connect_error().')'.mysqli_connect_error()");         
 	    } else {
	 	    $sql="Insert into ph(uid,firstname,email,id_no,password) values(1,'$user','$email','$idno','$password')";
	 	    if($conn->query($sql)){
	 	    	echo"new record is inserted";
	 		} else{
	 		echo "error:".$sql."<br>".$conn->error;
       		}
 		}
 	} else {
 		echo "Password should not be empty";
 		die();
 	}  
}  else{
 		echo "Username should not be empty";
 		die();
}
?>
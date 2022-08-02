<?php 

require_once ('connection.php');

if(isset($_POST['username'])){
	$email = $_POST['username'];
	$password = $_POST['password'];
    $password = mysqli_real_escape_string($connection,$password);
    $username = mysqli_real_escape_string($connection,$username);
    $query_username = "SELECT username,password from admin WHERE username = '$username' ";

   $result =  mysqli_query($connection,$query_username);

 $row_username = mysqli_num_rows($result);

if($row_username > 0 ){
	 $data = mysqli_fetch_assoc($result);
	 $pwd = $data['password']; // the password in database must be greater than 60 of length

	 if($pwd == $password){

	session_start();
 


	$_SESSION['username'] = $username;
	header("location: user.php");
}else {
	echo "wrong password";
	//header("location: admin.php",3);
}
 
}else {
	 echo "username does not exist";
	// header("location: admin.php",3);
	// header("location: loginsignup.php");
}
  




	
}

?>



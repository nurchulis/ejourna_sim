<?php 
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
echo $username;
echo $password;
$login = mysqli_query($mysqli,"SELECT * from publisher where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	   foreach ($login as $key=>$val)
        {
        	$_SESSION['id_publisher'] = $val['id_publisher'];
        }

	header("location:../../?page=publish");
}else{
	header("location:index.php");	
}

?>
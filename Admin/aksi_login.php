<?php 
include "../config/config.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
echo $username;
echo $password;
$login = mysqli_query($mysqli,"SELECT * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";

	   foreach ($login as $key=>$val)
        {
        	$_SESSION['id_admin'] = $val['id_admin'];
        }

	header("location:./index.php");
}else{
	header("location:index.php");	
}

?>
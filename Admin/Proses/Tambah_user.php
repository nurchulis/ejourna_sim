<?php 

include "../../config/config.php";

 	$username=$_POST['username'];
 	$password=$_POST['password'];
	$afliasi=$_POST['afliasi'];

$sql=mysqli_query($mysqli, "INSERT INTO publisher (username, afliasi, password) VALUES ('$username','$afliasi','$password') "); 
  	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Insert');
    window.location.href='../index.php?page=Publisher_list';
    </script>");  
?>
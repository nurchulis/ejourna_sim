<?php
include "../../config/config.php";

$password_baru=$_POST['password'];
$id_publisher= $_POST['id_publisher'];


	$sql =mysqli_query($mysqli,"UPDATE publisher SET password='$password_baru' WHERE id_publisher='$id_publisher' ");
		echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Update');
    window.location.href='../index.php?page=Publisher_list';
    </script>");  
?>
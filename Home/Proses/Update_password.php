<?php
include "config.php";

$password_lama=$_POST['password_lama'];
$password_baru=$_POST['password_baru'];
$id_publisher= $_POST['id_publisher'];
$query=mysqli_query($mysqli,"SELECT * from publisher where id_publisher='$id_publisher' AND password ='$password_lama'");
$cek = mysqli_num_rows($query);

if($cek > 0){
	$sql =mysqli_query($mysqli,"UPDATE publisher SET password='$password_baru' WHERE id_publisher='$id_publisher' ");
			header("location:../../?page=publish");
}
?>
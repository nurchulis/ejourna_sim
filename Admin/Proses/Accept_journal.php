<?php
include "../../config/config.php";

$id_journal=$_POST['id_journal'];
$status=$_POST['status'];

	$sql =mysqli_query($mysqli,"UPDATE journal SET status='$status' WHERE id_journal='$id_journal' ");
		//	header("location:Admin/index.php?page=Request_list");
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Posted');
    window.location.href='../index.php?page=Request_list';
    </script>");
?>
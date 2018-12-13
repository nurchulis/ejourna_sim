<?php

include "../../config/config.php";

$ambil=$_POST['id_publisher'];

$query=mysqli_query($mysqli, "DELETE from publisher where id_publisher='$ambil' ");
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Delete');
    window.location.href='../index.php?page=Publisher_list';
    </script>");  
?>

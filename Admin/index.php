<?php 
ob_start(); // Dengan Menambahkan ob_start(), Warning Session bisa Fix
session_start();
?>
<?php 
if(($_SESSION['status'] !="login")){
  header("location:./login.php");
}
?>
<?php
include "Header.php";

@$ambil=$_GET['page'];

switch ($ambil) {
	case 'journal':
    include "Journal.php";		
		break;
	case 'kategori':
	include 'Kategori_journal.php';
	break;

	case 'Manager_user':
	include 'Manager_user.php';
		break;
	case 'Request_list':	
	include 'Request_list.php';
			break;	
	case 'Logout':
	include 'Logout.php';
		break;
	case 'Publisher_list':
	include 'Publisher_list.php';
			break;	

	default:
include "Homeadmin.php";
		break;
}

include "Footer.php";
?>
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

	default:
include "Homeadmin.php";
		break;
}

include "Footer.php";
?>
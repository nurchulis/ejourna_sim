<?php 
include "config.php";
	$ekstensi_diperbolehkan	= array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$ambil=mysqli_query($mysqli,"SELECT * from journal ORDER BY urut DESC LIMIT 1");
	$row=mysqli_fetch_array($ambil);

   	$urut=$row['urut']+1;
echo 	$id_publisher=$_POST['id_publisher'];
echo 	$nama_journal=$_POST['nama_journal'];
echo	$link_journal=$_POST['link_journal'];
echo	$label=$_POST['label'];

	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, '../../assets/img/jurnal/'.$nama);
			$query = mysqli_query($mysqli,"INSERT INTO journal VALUES('','".$id_publisher."','".$nama_journal."','".$link_journal."','".$nama."','4','".$urut."','".$label."','0')");
			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
				header("location:../../?page=publish");
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
				header("location:../../?page=publish");
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
			header("location:../../?page=publish");
		    }
	       }else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		header("location:../../?page=publish");
	       }
    
?>
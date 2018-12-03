<?php 
include "config/config.php";
$catagories = mysqli_query($mysqli, "SELECT * FROM kategori");
$journal = mysqli_query($mysqli, "SELECT * FROM journal");

foreach($catagories as $key=>$val){
     echo $val['nama_kategori'];
     echo "<br>";
     foreach ($journal as $key => $tampil) {
          if ($val['id_kategori'] === $tampil['kategori_journal'])
            echo "<td>".$tampil['nama_journal']."</td>"; 
            echo "<br>";     
       
     }
}





?>




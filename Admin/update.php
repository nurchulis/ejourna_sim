
<?php
//update.php
$connect = mysqli_connect("localhost", "root", "root", "ejournal");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
 $query = "
 UPDATE kategori 
 SET urut = '".$i."' 
 WHERE id_kategori = '".$_POST["page_id_array"][$i]."'";
 mysqli_query($connect, $query);
}


?>
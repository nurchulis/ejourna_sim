<?php
//update.php
$connect = mysqli_connect("localhost", "root", "root", "ejournal");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
 $query = "
 UPDATE journal 
 SET urut = '".$i."' 
 WHERE id_journal = '".$_POST["page_id_array"][$i]."'";
 mysqli_query($connect, $query);
}

?>
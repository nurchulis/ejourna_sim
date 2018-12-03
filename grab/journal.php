<?php 

include 'class/Journal.inc.php';
header('Content-Type: application/json');
$journal = new Journal;
echo json_encode($journal->getAllJournals());


?>

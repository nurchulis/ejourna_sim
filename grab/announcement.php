<?php 

include 'class/Announcement.inc.php';
header('Content-Type: application/json');
$announcement = new Announcement;
echo json_encode($announcement->getAllAnnouncements());

?>

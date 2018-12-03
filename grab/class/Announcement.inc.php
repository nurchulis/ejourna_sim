<?php

/**
* Announcement class
*/

// require 'Config.inc.php';
// require 'Database.inc.php';

require 'class/Journal.inc.php';

class Announcement
{
	
	private $connections;
	private $active_connection;
	public $announcements = array();

	function __construct()
	{
		$config_data = Config::getData();
		$database = new Database($config_data);
		$this->connections = $database->getMultiConnections();
	}

	public function getAllAnnouncements($limit=null)
	{
		foreach ($this->connections as $name => $connection) {

			// Query all announcements that is not expired yet
			$this->active_connection = $connection;
			$query = $connection->prepare(
						"SELECT announcement_id, assoc_id AS journal_id, 
								date_posted, date_expire
						 FROM announcements
						 WHERE  date_expire > NOW() OR date_expire IS NULL"
					);

			$query->execute();

			// Get announcement setting
			foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $ann) {
				$ann['settings'] = 
					$this->getAnnouncementSettings($ann['announcement_id']);

				// Get journal url
				$base_url = Config::getBaseURL($name);
				$path = Journal::getJournalPath($connection, $ann['journal_id']);
				$ann['settings']['url'] = $base_url.'/'.$path.'/announcement';

				$announcements[] = $ann;
			}
			
			// Sort by date posted
			usort($announcements, function($a, $b) {
			    if($a['date_posted']==$b['date_posted']) return 0;
			    return $a['date_posted'] < $b['date_posted']?1:-1;
			});

			// If any limits
			if(!is_null($limit)) {
				$this->announcements = array_slice($announcements, 0, $limit, true);
			}else{
				$this->announcements = array_slice($announcements, 0, 4, true);
			}
		}
		
		return $this->announcements;
	}

	private function getAnnouncementSettings($announcement_id)
	{
		$announcement_setting = array();

		$query = $this->active_connection->prepare(
					"SELECT setting_name, setting_value, setting_type
					 FROM announcement_settings
					 WHERE announcement_id = :announcement_id
					 AND (setting_name = 'title'
					 OR setting_name = 'descriptionShort')"
				);
		$query->bindParam('announcement_id', $announcement_id);
		$query->execute();

		foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$announcement_setting[$row['setting_name']] = 
				$this->getSettingValue(
					$row['setting_name'],
					$row['setting_type'], 
					$row['setting_value']
				);
		}

		return $announcement_setting;
	}

	private function getSettingValue($name, $type, $value)
	{
		switch ($type) {
			case 'bool':
				$value = (bool) $value;
				break;
			case 'int':
				$value = (int) $value;
				break;
			case 'float':
				$value = (float) $value;
				break;
			case 'object':
				$value = unserialize($value);
				// if ($name == 'journalThumbnail'){
				// 	$value = $value['uploadName'];
				// }
				break;
			case 'date':
				if ($value !== null) $value = strtotime($value);
				break;
			case 'string':
				if ($name == 'descriptionShort') {
					$value = utf8_encode($value);
					// $value = preg_replace('/\s+?(\S+)?$/', '', 
					// 			substr($value, 0, 50)).'...';
				}
				break;
			default:
				// Nothing required.
				break;
		}
		return $value;
	}
}
?>

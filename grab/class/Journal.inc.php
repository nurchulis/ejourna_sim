<?php

/**
* Journal class
*/

require 'Config.inc.php';
require 'Database.inc.php';

class Journal
{
	private $connections;
	private $active_connection;
	public $journals = array();

	function __construct()
	{
		$config_data = Config::getData();
		$database = new Database($config_data);
		$this->connections = $database->getMultiConnections();
	}

	public function getAllJournals()
	{

		// Get journal from each database
		foreach ($this->connections as $name => $connection) {
			// Query enabled journals
			$this->active_connection = $connection;
			$query = $connection->query(
						"SELECT journal_id, path 
						 FROM journals
						 WHERE enabled = 1"
					);

			// Getting  settings for each journal
			foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $journal) {
				$base_url = Config::getBaseURL($name);
				$public_files_dir = Config::getPublicFilesDir($name);
				$ojs = $name;

				// Getting journal setting
				$journal['settings'] = $this->getJournalSettings(
					$journal['journal_id']
				);

				// Getting journal thumbnail
				if (isset($journal['settings']['journalThumbnail'])) {
					$journal['settings']['journalThumbnail'] =
					$this->getJournalThumbnail(
						$base_url, $public_files_dir,
						$journal['journal_id'],
						$journal['settings']['journalThumbnail']
					);
				} else {
					$journal['settings']['journalThumbnail'] = 
						'images/thumbs/noimage.png';
				}

				// Patch OJS3
				if (isset($journal['settings']['name'])) {
					$journal['settings']['title'] = $journal['settings']['name'];
				}				

				// Getting subtitle
				if (!isset($journal['settings']['pageHeaderTitle'])) {
					$journal['settings']['pageHeaderTitle'] = '';
				}

				// Getting journal URL
				$journal['settings']['url'] = $base_url.'/'.$journal['path'];

				$journals[] = $journal;
			}
		}
		
		// Getting external (static) journals
		$ext_journals = $this->getExternalJournal();
		foreach ($ext_journals as $journal){
			$journals[] = $journal;
		}

		// Sort by title
		usort($journals, function($a, $b) {
			if($a['settings']['title']==$b['settings']['title']) return 0;
			return $a['settings']['title'] > $b['settings']['title']?1:-1;
		});
			
		// Bundle journals
		$this->journals = $journals;
		// }

		return $this->journals;
	}

	private function getJournalSettings($journal_id)
	{
		$journal_setting = array();

		$query = $this->active_connection->prepare(
					"SELECT setting_name, setting_value, setting_type
					 FROM journal_settings
					 WHERE journal_id = :journal_id
					 AND (setting_name = 'title'
					 OR setting_name = 'name'
					 OR setting_name = 'journalThumbnail'
					 OR setting_name = 'pageHeaderTitle')"
				);
		$query->bindParam('journal_id', $journal_id);
		$query->execute();

		foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $row) {
				$journal_setting[$row['setting_name']] = 
				$this->getSettingValue(
					$row['setting_name'],
					$row['setting_type'], 
					$row['setting_value']
				);
		}

		return $journal_setting;
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
				if ($name == 'journalThumbnail'){
					$value = $value['uploadName'];
				}
				break;
			case 'date':
				if ($value !== null) $value = strtotime($value);
				break;
			case 'string':
			default:
				// Nothing required.
				break;
		}
		return $value;
	}

	private function getJournalThumbnail($base_url, $public_dir, $id, $image)
	{
		$thumbnail = 
			$base_url.'/'
			.$public_dir.'/'
			.'journals/'
			.$id.'/'
			.$image;
		return $thumbnail;
	}

	public static function getJournalPath($connection, $journal_id)
	{
		$query = $connection->prepare(
			"SELECT path 
			 FROM journals
			 WHERE enabled = 1
			 AND journal_id = :journal_id"
		);
		$query->bindParam('journal_id', $journal_id);
		$query->execute();

		return $query->fetch(PDO::FETCH_ASSOC)['path'];
	}

	public function getExternalJournal(){
		$ext_journals =
		array(
		    array(
			'journal_id' => 1,
			'path' => AJIS,
			'settings' => array(
				'journalThumbnail' => 'http://ejournal.uin-suka.ac.id/images/thumbs/aljamiah.png',
				'title' => "Al-Jami'ah",
				'pageHeaderTitle' => 'Journal of Islamic Studies',
				'url' => 'http://aljamiah.or.id/index.php/AJIS'
			) 
		    ),
		    array(
			'journal_id' => 1,
			'path' => 'AS',
			'settings' => array(
				'journalThumbnail' => 'http://ejournal.uin-suka.ac.id/images/thumbs/assyirah.png',
				'title' => "Asy-Syir'ah",
				'pageHeaderTitle' => "Jurnal Ilmu Syari'ah dan Hukum",
				'url' => 'http://asy-syirah.uin-suka.com/index.php/AS'	
			)
		    ),
		    array(
			'journal_id' => 1,
			'path' => 'BIOMEDICH',
			'settings' => array(
				'journalThumbnail' => 'http://ejournal.uin-suka.ac.id/images/thumbs/biomedich.png',
				'title' => 'Jurnal Biomedich',
				'pageHeaderTitle' => '',
				'url' => 'http://sciencebiology.org/index.php/BIOMEDICH'
			)
		    ),
		    array(
			'journal_id' => 1,
			'path' => 'FOURIER',
			'settings' => array(
				'journalThumbnail' => 'http://ejournal.uin-suka.ac.id/images/thumbs/fourier.png',
				'title' => 'Jurnal Fourier',
				'pageHeaderTitle' => '',
				'url' => 'http://fourier.or.id/index.php/FOURIER'
			)
		    )
		);
		return $ext_journals;
	}

}

?>

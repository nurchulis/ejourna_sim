<?php

/**
* Database class
*/

class Database
{
	private $config_data;
	private $connections;

	function __construct($config_data)
	{
		$this->config_data = $config_data;
	}

	public function getMultiConnections()
	{
		$connections = array();

		if ($this->config_data != '') {
			foreach ($this->config_data as $config => $data) {
				try {
					$driver = $data['database']['driver'];
					$host = $data['database']['host'];
					$db = $data['database']['name'];
					$user = $data['database']['username'];
					$pass = $data['database']['password'];

					$conn = new PDO("$driver:host=$host;dbname=$db", $user, $pass);
					// set the PDO error mode to exception
    				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    				$this->connections[$config] = $conn;
				
				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
			}
		}

		return $this->connections;
	}

	/**
	 * Close all connections
	 */
	function __destruct()
	{
		foreach ($this->connections as $connection) {
			$connection = null;
		}
	}
}
?>
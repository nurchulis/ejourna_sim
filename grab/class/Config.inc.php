<?php

class Config {
	/** Configs that already already parsed */
	private static $config = array(
			'files' => array(
		/*	'adab' => '../adab/config.inc.php', # relative path 
			'dakwah' => '../dakwah/config.inc.php', # relative path 
			'febi' => '../febi/config.inc.php', # relative path 
			'isoshum' => '../isoshum/config.inc.php', # relative path 
			'pasca' => '../pasca/config.inc.php', # relative path 
			'pusat' => '../pusat/config.inc.php', # relative path
			'syariah' => '../tarbiyah/config.inc.php', # relative path 
		
			'saintek' => '../../saintek/config.inc.php', # relative path 
		*/
			'tarbiyah' => '../../tarbiyah/config.inc.php', # relative path
		),
		'data' => null,
	);

	/**
	 * Constructor.
	 */
	// function Config() {
	// }

	/**
	 * Retrieve a specified configuration variable.
	 * @param $section string
	 * @param $key string
	 * @param $default string optional
	 * @return string
	 */
	// function getVar($section, $key, $default = null) {
	// 	$config =& $this->getData();
	// 	return isset($config[$section][$key]) ? $config[$section][$key] : $default;
	// }
	// 
	
	/**
	 * Get base URL
	 * @param  string $name index name
	 * @return sring       base url
	 */
	public static function getBaseURL($name)
	{
		return self::$config['data'][$name]['general']['base_url'];
	}

	public static function getPublicFilesDir($name)
	{
		return self::$config['data'][$name]['files']['public_files_dir'];
	}

	/**
	 * Get the current configuration data.
	 * @return array the configuration data
	 */
	public static function getData() {

		if (self::$config['data'] === null) {
			// Load configuration data only once per request
			self::$config['data'] = self::reloadData();
		}

		return self::$config['data'];
	}


	/**
	 * Load configuration data from a file.
	 * The file is assumed to be formatted in php.ini style.
	 * @return array the configuration data
	 */
	private static function reloadData() {
		$config = array();

		foreach (self::$config['files'] as $name => $path) {
			if (($config[$name] = self::readConfig($path)) === false) {
				echo sprintf('Cannot read configuration file %s', $path);
			}
		}

		return $config;
	}

	/**
	 * Set the path to the configuration file.
	 * @param $configFile string
	 */
	// function setConfigFileName($configFile) {
	// 	// Reset the config data
	// 	$config = null;
	// 	Registry::set('configData', $config);

	// 	// Set the config file
	// 	Registry::set('configFile', $configFile);
	// }

	/**
	 * Return the path to the configuration file.
	 * @return string
	 */
	// function getConfigFileName() {
	// 	return Registry::get('configFile', true, CONFIG_FILE);
	// }

	/**
	 * Read a configuration file into a multidimensional array.
	 * This is a replacement for the PHP parse_ini_file function, which does not type setting values.
	 * @param $file string full path to the config file
	 * @return array the configuration data (same format as http://php.net/parse_ini_file)
	 */
	private static function readConfig($file) {
		$config = array();
		$currentSection = false;
		$falseValue = false;

		if (!file_exists($file) || !is_readable($file)) {
			return $falseValue;
		}

		$fp = fopen($file, 'rb');
		if (!$fp) {
			return $falseValue;
		}

		while (!feof($fp)) {
			$line = fgets($fp, 1024);
			$line = trim($line);
			if ($line === '' || strpos($line, ';') === 0) {
				// Skip empty or commented line
				continue;
			}

			if (preg_match('/^\[(.+)\]/', $line, $matches)) {
				// Found a section
				$currentSection = $matches[1];
				if (!isset($config[$currentSection])) {
					$config[$currentSection] = array();
				}

			} else if (strpos($line, '=') !== false) {
				// Found a setting
				list($key, $value) = explode('=', $line, 2);
				$key = trim($key);
				$value = trim($value);

				// FIXME This may produce incorrect results if the line contains a comment
				if (preg_match('/^[\"\'](.*)[\"\']$/', $value, $matches)) {
					// Treat value as a string
					$value = stripslashes($matches[1]);

				} else {
					preg_match('/^([\S]*)/', $value, $matches);
					$value = $matches[1];

					// Try to determine the type of the value
					if ($value === '') {
						$value = null;

					} else if (is_numeric($value)) {
						if (strstr($value, '.')) {
							// floating-point
							$value = (float) $value;
						} else if (substr($value, 0, 2) == '0x') {
							// hex
							$value = intval($value, 16);
						} else if (substr($value, 0, 1) == '0') {
							// octal
							$value = intval($value, 8);
						} else {
							// integer
							$value = (int) $value;
						}

					} else if (strtolower($value) == 'true' || strtolower($value) == 'on') {
						$value = true;

					} else if (strtolower($value) == 'false' || strtolower($value) == 'off') {
						$value = false;

					} else if (defined($value)) {
						// The value matches a named constant
						$value = constant($value);
					}
				}

				if ($currentSection === false) {
					$config[$key] = $value;

				} else if (is_array($config[$currentSection])) {
					$config[$currentSection][$key] = $value;
				}
			}
		}

		fclose($fp);

		return $config;
	}

}

?>

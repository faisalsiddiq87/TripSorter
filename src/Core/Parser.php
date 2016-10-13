<?php

namespace app\Core;

/**
 * Class Parser
 *
 * The class is responsible for loading json file and converting json to array
 *
*/
class Parser
{
	protected $jsonObject = null;
	
	public function __construct($src)
	{
		$this->jsonObject = $src;
	}
	
    /**
     * Load the json file contents and convert to array
     *
     * @return array
    */
	public function parseJson() 
	{
		try {
			$str = file_get_contents($this->jsonObject);
			$json = json_decode($str, true); 
			$arr = $json['data'];
			return $arr;
		} catch(Exception $e) {
			return $e;
		}
	}

}

<?php
	function getdbconfig($arg){
		$content = file_get_contents('dbconfig.properties');
		$reg = "/" . $arg . " = " . "(.*)/";
		preg_match($reg, $content, $matches);
		return trim($matches[1]);
		
	}





?>
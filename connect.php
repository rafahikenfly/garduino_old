<?php

	function Connection(){
		$server="garduino.mysql.uhserver.com";
		$user="garduinobeta";
		$pass="teste135@";
		$db="garduino";
	   	
		$connection = mysql_connect($server, $user, $pass);

		if (!$connection) {
	    	die('MySQL ERROR: ' . mysql_error());
		}
		
		mysql_select_db($db) or die( 'MySQL ERROR: '. mysql_error() );

		return $connection;
	}
?>

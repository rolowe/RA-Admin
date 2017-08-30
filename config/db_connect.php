<?php

	// Load configuration as an array. Use the actual location of your configuration file
	$config = parse_ini_file('../config.ini'); 

	// Try and connect to the database
	$connection = mysqli_connect('localhost', $config['username'], $config['password'], $config['dbname']);

	// If connection was not successful, handle the error
	if($connection === false) {
	    // Handle error - notify administrator, log to a file, show an error screen, etc.
	    echo "Cannot connect to the database.";
	}




	// Querying the database
	function db_select($query) {
	    $rows = array();
	    $result = db_query($query);

	    // If query failed, return `false`
	    if($result === false) {
	        return false;
	    }

	    // If query was successful, retrieve all the rows into an array
	    while ($row = mysqli_fetch_assoc($result)) {
	        $rows[] = $row;
	    }
	    return $rows;
	}

	

?>
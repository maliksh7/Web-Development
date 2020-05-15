<?php 

	/**
	* Php file to handle connection to database.
	*/

	$host = "localhost";
	$username = "mubeen";
	$password = "";
	$dbname = "phpblog";

	$connect = mysqli_connect($host, $username, $password, "");

	if($connect){
		echo "<h1> Connected </h1></br>";
	} else {
		echo "<h1> Cannot Connected </h1></br>";
	}

	// endoffile
 ?>
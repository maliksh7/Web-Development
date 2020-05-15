
<?php
// global $host, $user, $pass, $dbname, $port;
print_r($_POST);
$host = $_POST['host'];
$user = $_POST['user'];
// $pass = $_POST['pass'];
$DATABASE = $_POST['dbname'];


// Create Connection
$conn = mysqli_connect($host, $user, "", "");
// Check Connection
if(!$conn) {
		echo "Connection Failed";
	} else {
		echo "Connected Successfully <br>";
	}

// creating database
	$sql="CREATE DATABASE ".$DATABASE;
	echo $sql."<br>";
	if (mysqli_query($conn, $sql)) {
		echo "Database Created.!<br>";
	} else {
		echo "error <br> ";
	}


$conn->close();


?>

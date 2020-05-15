<?php

  $host = "localhost";
  $user = "root";
  $pass = "";

  // making connection of php with MySQL

  $conn = mysqli_connect($host, $user, $pass);

  if(!$conn) {
    echo "Connection Failed <br>";
  } else {
    echo "Connected Successfully <br>";
  }
  
  // creating database
  $dbname = "newDB";
  $sql = "CREATE DATABASE $dbname";
  if (mysqli_query($conn, $sql)) {
    echo "Database Created.! <br>";
  } else {
    echo "error <br>";
  }

  $conn1 = mysqli_connect($host, $user, $pass, $dbname);

  $sql1 = "CREATE TABLE newtable(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(40) NOT NULL,
            lastname VARCHAR(40) NOT NULL,
            email VARCHAR(40) NOT NULL,
            password VARCHAR(40) NOT NULL,
            date TIMESTAMP
            )";
  
  if(mysqli_query($conn1, $sql1)) {
    echo "Table Created..! <br>";
  } else {
    echo "Table not Created. <br>";
  }


?>
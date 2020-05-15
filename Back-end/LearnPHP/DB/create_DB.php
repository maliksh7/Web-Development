<?php

  $host = "localhost";
  $user = "root";
  $pass = "";

  // making connection of php with MySQL

  $conn = mysqli_connect($host, $user, $pass);

  if(!$conn) {
    echo "Connection Failed";
  } else {
    echo "Connected Successfully";
  }

  // creating database
  $sql = "CREATE DATABASE MYDB";
  if (mysqli_query($conn, $sql)) {
    echo "Database Created.!";
  } else {
    echo "error";
  }


?>
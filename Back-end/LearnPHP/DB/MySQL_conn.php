<?php

  $host = "localhost";
  $user = "root";
  $pass = "";

  $conn = mysqli_connect($host, $user, $pass);

  if(!$conn) {
    echo "Connection Failed";
  } else {
    echo "Connected Successfully";
  }

?>
<?php
  // error_reporting(0);
  $host = "localhost";
  $user = $_POST['Username'];
  $pass = $_POST['pass'];

  $conn = mysqli_connect($host, "root","");

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
  // mysql_select_db ("phptest");


  // // if $fn and $pw match a record, then display page, else display failure page

  // $query = "SELECT firstname, password FROM mailinglist WHERE (firstname = '$fn' AND password = '$pw')";

  // $result = mysql_query ($query, $link);
  // if (mysql_num_rows($result) == 1) {
  // print 'Good to go' ;
  // } else {
  // print 'Sorry, this login is invalid' ;
  // }

?>
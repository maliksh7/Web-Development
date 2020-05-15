<?php

  $cookie_Name = "MySQL_Server";
  $cookie_Value = "248";
  setcookie($cookie_Name, $cookie_Value, time()+3600);
  if(!isset($_COOKIE[$cookie_Name])) {
    echo "cookis is not set";
  } else {
    echo "cookie is set";
  }

?>
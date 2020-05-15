<?php
  error_reporting(0);
  $cookie_Name = $_POST["user"];
  $cookie_Pass = $_POST["pass"];
  $cookie_Value = "786";
  if($cookie_Name && $cookie_Value) 
  {
    if(($cookie_Name == "Saad") && ($cookie_Pass == "saad"))
    {
      // setting the cookie
      setcookie($cookie_Name, $cookie_Value, time()+3600);
      //connected with use..??
      echo "Hello, How are you doing Mr. $cookie_Name!!" ;
      // for LogOut button
      echo '<form action="" method="post"> 
              <input type="submit" value="Log out" name="lg">
            </form>
          ';
      // chk to be excuted when user pree logout button
      if($_POST['lg'])
      {
        //deleting the cookie
        setcookie($cookie_Name,"",time()-3600);
      }
    }
    else
    { 
      // if user enter wrong credentials
      echo "Username or Password is incorrect";
    }
  } 
  else {
    // displaying the form on web page (will start from here)
    echo ' <form action="" method="post">
              Username: <input type="text" name="user">
              Password: <input type="password" name="pass">
              <input type="Submit" value="login">
            </form>';
  } 


?>


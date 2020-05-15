<?php

  session_start();
  if(isset($_SESSION['new']))
  {
    echo "start ".$_SESSION['new']; 
    echo '<form action="" method="post"> 
            <input type="submit" value="logout" name="logout">
          </form>
        ';
    if($_POST['logout'])
    {
      session_unset();
      echo "Now press f5 to end the session...!";
    }      
  }
  else 
  {
    if($_POST['login'])
    {
      $_SESSION['new'] = "new name";
      echo "Now press f5 and start session...!";
    }  
    echo '<form action="" method="post"> 
            <input type="submit" value="login" name="login">
          </form>
        ';
  }


?>
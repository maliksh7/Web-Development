<?php
      //  Read data from file
  // Open file
  $open = fopen("read.txt","r");
  
  //Read data from the file 
  // readfile("read.txt");

  //Read file mode wise
  echo fread($open, filesize("read.txt"));
  
  //Close file
  fclose($open);



  //************************************************************************************************//


  //  Read data from file


  // Open file
  $open = fopen("new.txt","w ");

  $insert = "
              <h1> Hi </h1>
              <p> This is paragraph, writen in write mode of file handling in php </p>
  ";

  fwrite($open, $insert);



  //now to read what written on file , we can use two cammands:
  
  // readfile("new.txt");   
  // can also use these commands to read the file
  $open1 = fopen("new.txt", "r");
  echo fread($open1, filesize("new.txt"));

  
    //Close file
  fclose($open);
?>
<?php
/* 
  PHP Script
      $_FILES Properties

      move_uploaded_file() demands two agruments
      -> $tempName
      -> $fileName

      Selection on the basis of Size and Type of File.

      Size Note:
      1 kb ---> 1024 bytes
      1 mb ---> 1024 * 1024 bytes
      1 gb ---> 1024 * 1024 * 1024 byte
*/

  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
 
  $tempName = $_FILES['upfile']["tmp_name"];
  $fileName = $_FILES['upfile']["name"];
  $fileType = $_FILES['upfile']["type"];
  $fileSize = $_FILES['upfile']["size"];

  $upload = "updone/";

  // // selection of file on the basis of File TYPE.
  // if($fileType == "application/octet-stream"){

  //   if(move_uploaded_file($tempName,$upload.$fileName))
  //     echo "File Uploaded Successfully...!";
  //   else
  //     echo "Error Uploading file...!";  

  // } else {
  //     echo "File type isn't PHP...!";
  // }  

  // selection of file on the basis of File SIZE.
  if($fileSize <= 500){

    if(move_uploaded_file($tempName,$upload.$fileName))
      echo "File Uploaded Successfully...!";
    else
      echo "Error Uploading file...!";  

  } else {
      echo "File Size is greater...!";
  }   

?>
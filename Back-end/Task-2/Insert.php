<?php
    
    $servername = "localhost";
    $username = "root";
    $name = $_POST["name"];
    $roll_no = $_POST["rollnumber"];
    $field = $_POST["field"];
    $tablename = $_POST["table"];
    $db = $_POST["db"];

     // Create connection
     $conn = new mysqli($servername, $username, "", $db);
     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }
     else
     {
         echo"connected";
     }

    $qry = " INSERT INTO $tablename(name, RollNumber, Field) VALUES('".$name."' , '".$roll_no."' , '".$field."' ) ";

    if($conn->query($qry))
    {
        echo "Data Inserted :)";
        echo "<button><a href='../Task-2/display-options.html'>Show Data(from database)</a></button> ";
    }
    else
    {
        $conn->error;
        echo "Data Not Inserted :(";
        echo "ERROR: Could not able to execute $qry. " . mysqli_error($conn);
    }
    

    
?>

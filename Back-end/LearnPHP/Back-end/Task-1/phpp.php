<?php
    error_reporting(0);
    $dbhost= $_POST["host"];
    $dbuser = $_POST["user"];
    $dbpass = $_POST["password"];
    $db = $_POST["database"];
    $port = $_POST["port"];
    $dbtable = $_POST["table"];

    $conn = new mysqli($dbhost,$dbuser,"","","3306");

    if ($conn->connect_error)
    {
        die("<br>Connection Failed: ");
    }
    else
    {
        echo "<br>connected successfully <br>";
    }


    mysqli_connect('localhost','root','');
    $query = "create database "."$db";
    $user_qry = "USE ".$db. "";

    $table_qry = "CREATE TABLE $dbtable(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(30) NOT NULL,
        RollNumber VARCHAR(30) NOT NULL,
        Field VARCHAR(70) NOT NULL UNIQUE
    )";

    
    if(mysqli_query($conn, $query))
    {
        echo "Database created successfully";

        if($conn->query($user_qry))
        {
            echo "<br>Using this database";
        }
        else
        {
            echo"cant use this db";
        }

            if($conn->query($table_qry))
            {
                echo "<br>Table Created Success";
            }
            else
            {
                echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
            }

            echo "<br>";
            echo "<button><a href='../Task-2/insert.html'>Add DATA</a></button> ";


    }
    else
    {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = $_GET["mydb"];
$tablename = $_GET["table"];
$column = $_GET["column"];
$rowid = $_GET["rowid"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

    if($column != "")
    {
        $sql = "SELECT id,$column FROM $tablename";
        $result = $conn->query($sql);

        echo"Your Desired Column";



        if ($result->num_rows > 0) 
        {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                $temp1 =$row["id"];
                $temp = $row["$column"];


                echo '<tr> 
                //                 <td>'.$temp1.'</td> 
                //                 <td>'.$temp.'</td>';
            }
        }
         else 
        {
            echo "0 results";
        }

    }
    elseif($rowid != "")
    {

        $sql = "SELECT id, name, RollNumber, Field FROM $tablename WHERE id = $rowid";
        $result = $conn->query($sql);
        if (!$result) {
            echo 'Could not run query: ' . mysqli_error();
            exit;
        }
        echo"Desired Row","<br>";
        $rowi = mysqli_fetch_row($result);

        echo $rowi[0]."  "; 
        echo $rowi[1]."  ";
        echo $rowi[2]."  ";
        echo $rowi[3]."  ";
    }

    else
    {

    
        $query = "SELECT id, name, RollNumber, Field FROM $tablename";

        
        if ($result = $conn->query($query))
        {
            while ($row = $result->fetch_assoc())
            {
                $field1name = $row["id"];
                $field2name = $row["name"];
                $field3name = $row["RollNumber"];
                $field4name = $row["Field"];

        
                echo '<tr> 
                        <td>'.$field1name.'</td> 
                        <td>'.$field2name.'</td> 
                        <td>'.$field3name.'</td> 
                        <td>'.$field4name.'</td> 
                    </tr>';
            }
            $result->free();
        }
        else
        {
            echo"Record Not Found";
        }

    }



    

?>
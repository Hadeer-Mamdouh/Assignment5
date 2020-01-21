<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name




$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else
{

///query
$query="SELECT B.lastName AS lastName2,
        B.firstName AS firstName2,
        A.lastName AS lastName1,
        A.firstName AS firstName1
        FROM employees B, employees A
        WHERE A.employeeNumber = B.reportsTo";

$result=$conn->query($query);
    
 if($result->num_rows>0){
    echo "<table style='border:solid 1px'><tr><th>Employee Name</th><th>Boss Name</th></tr></table> <br> <br>";
    while($row=$result->fetch_assoc()){
        
        echo "<table><tr><td>" . $row['lastName2'] . " " . $row['firstName2']. "| |" . " </td><td> " . $row["lastName1"]. " </td><td> " . $row['firstName1']."</td></tr></table>"  ;
    }
  }

}
?>
<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name

$minvalue=$_POST["minvalue"];


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
///query
$query="SELECT customerName
FROM customers
WHERE creditLimit>$minvalue";

$result=$conn->query($query);

if($result->num_rows>0){
    echo "customerName<br>";
    while($row=$result->fetch_assoc()){
        
        echo $row["customerName"] . "<br>";
    }
}

}
?>
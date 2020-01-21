<?php
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else
echo "connected success"."<br>";


$id=$_GET["id"];



///query
$query=" SELECT * FROM `customers` WHERE customerNumber='$id'
 

  ";

$result=$conn->query($query);
 //print_r($result);



if($result->num_rows >0)
{

    while($rows=$result->fetch_assoc())


    {

        echo"The data of the cusomer is   ".$rows["customerName"]."<br>"."<hr>";
echo $rows["customerNumber"].$rows["customerName"]."<br>";
echo $rows["contactLastName"].$rows["contactFirstName"]."<br>";

echo $rows["addressLine1"].$rows["addressLine2"]."<br>";
echo $rows["phone"]."<br>";


echo $rows["state"].$rows["city"]."<br>";
echo $rows["postalCode"].$rows["country"]."<br>";

echo $rows["salesRepEmployeeNumber"].$rows["creditLimit"]."<br>";
 
    }

    
}
else
echo "The ID of customer is not found";


 

<?php
session_start();
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name

$input=$_POST["input"];


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
///query
$query="SELECT products.productName ,SUM(orderdetails.quantityOrdered)
FROM products JOIN orderdetails
ON products.productCode=orderdetails.productCode
GROUP BY products.productName
HAVING SUM(orderdetails.quantityOrdered)>$input";

$result=$conn->query($query);

if($result->num_rows>0){
    
    while($row=$result->fetch_assoc()){
        
        echo "productName : " . $row["productName"] . " | Sum of quantityOrdered : " .  $row["SUM(orderdetails.quantityOrdered)"] . "<br>";
    }
}

}
?>
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
$query="SELECT products.productName,SUM(orderdetails.quantityOrdered), SUM(orderdetails.quantityOrdered*orderdetails.priceEach)  
FROM products JOIN orderdetails 
on products.productCode=orderdetails.productCode 
GROUP BY products.productName 
ORDER BY SUM(orderdetails.quantityOrdered*orderdetails.priceEach)
limit 10";

$result=$conn->query($query);
    
 if($result->num_rows>0){
    echo "<table style='border:solid 1px'><tr><th>productName</th><th>count of Quntity order</th><th> profit </th></tr></table> <br> <br>";
    while($row=$result->fetch_assoc()){
        
        echo "<table><tr><td>" . $row['productName'] . "</td><td>" . $row['SUM(orderdetails.quantityOrdered)']. " </td><td> " . $row["SUM(orderdetails.quantityOrdered*orderdetails.priceEach)"]."</td></tr></table>"  ;
    }
  }

}
?>
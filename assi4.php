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
$query="SELECT customers.customerName , count(orders.orderNumber)
        FROM customers JOIN orders
        ON orders.customerNumber=customers.customerNumber
        GROUP BY customers.customerName";

$result=$conn->query($query);
    
 if($result->num_rows>0){
    echo "customerName | | Count of orders <br>";
    while($row=$result->fetch_assoc()){
        
        echo $row["customerName"] . " | | " . $row["count(orders.orderNumber)"]."<br>"  ;
    }
  }

}
?>
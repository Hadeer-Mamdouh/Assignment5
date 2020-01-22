<?php

session_start();


$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name

if(isset($_SESSION['mail'])){
$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else
echo "connected success"."<br>";


$id=$_GET["id"];



///query
$query=" SELECT  quantityOrdered,orderNumber,salesRepEmployeeNumber ,customerName,creditLimit

FROM `orderdetails` , `customers`

WHERE productCode='$id'
ORDER BY creditLimit  DESC
 

  ";

$result=$conn->query($query);
 //print_r($result);



if($result->num_rows >0)
{
    echo"The data of the product is   ".$id."<br>"."<hr>";

    while($rows=$result->fetch_assoc())


    {



echo $rows["quantityOrdered"].$rows["orderNumber"]."<br>";
echo $rows["salesRepEmployeeNumber"].$rows["customerName"]."<br>";

echo $rows["creditLimit"]."<br>"."<hr>";
 

 

    
    }
}

else

    echo "The the product ID is  not found";


 }

else {
    
    	echo " Go <a href='login.php'>Login</a> <br/>";

}
?>

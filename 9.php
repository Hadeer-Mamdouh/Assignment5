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


$city=$_GET["city"];



///query
$query="SELECT customerName,creditLimit
FROM `customers` WHERE city='$city'
ORDER BY creditLimit DESC
LIMIT 3
 

  ";

$result=$conn->query($query);
 //print_r($result);



if($result->num_rows >0)
{
    echo"The richest people in  ".$city."<br>"."<hr>";

    while($rows=$result->fetch_assoc())


    {


echo $rows["customerName"].$rows["creditLimit"]."<br>";
 
    }

    
}
else
echo "The the name of city is  not found";

else {
    
    	echo " Go <a href='login.php'>Login</a> <br/>";

}
?>
 

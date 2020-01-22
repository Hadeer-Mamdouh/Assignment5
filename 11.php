<?php

session_start();


$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="rout-company";   // check your DB name


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);


if($conn->connect_error)

die("not connect :".$conn->connect_error);
else
echo "connected success"."<br>";


//$password=$_GET["password"];

///query


$query="ALTER TABLE employees   ADD COLUMN  password    INT  NOT NULL";
 
$result=$conn->query($query);

print_r ($result);
 

//$query="ALTER TABLE employees   ADD COLUMN  password    INT  NOT NULL";
//
//INSERT INTO `employees` (employeeNumber,lastName,firstName,extension,email,,reportsTo,jobTitle,password)


$employeeNumber=$_GET["employeeNumber"];

$lastName=$_GET["lastName"];

$firstName=$_GET["firstName"];

$extension=$_GET["extension"];

$email=$_GET["email"];

$officeCode=$_GET["officeCode"];

$reportsTo=$_GET["reportsTo"];

$jobTitle=$_GET["jobTitle"];

$password=$_GET["password"];

 


$query2="  

INSERT INTO `employees` (employeeNumber,lastName,firstName,extension,email,officeCode,reportsTo,jobTitle,password)

VALUES ('$employeeNumber','$lastName','$firstName','$extension','$email','$officeCode','$reportsTo','$jobTitle','$password')
";


/*


INSERT INTO `employees` (employeeNumber,lastName,firstName,extension,email,officeCode,reportsTo,jobTitle,password)

VALUES ('1005','mm','sama','ggg','k@h.com','2','1002','techer','123')
*/


 /*

$result=$conn->query($query);


 print_r($result);


 //print_r($query2);

echo   $employeeNumber.$lastName,$firstName,
 $extension,$email,$officeCode,$reportsTo,$jobTitle,$password;

 //print_r ($update);
 
 



if($result->num_rows >0)
{

    while($rows=$result->fetch_assoc())


    {

        echo"The firstname  is   ".$rows["firstname"]."<br>"."<hr>";
 
    }

    
}
else
echo "The ID of customer is not found";

 */




















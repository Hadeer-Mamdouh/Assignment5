<? php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail=$_POST['mail'];
    $pass=$_POST['pass'];
    $_SESSION['mail']=$mail;
    $_SESSION['pass']=$pass;
echo "Welcome to my First web site<br><br><br>";

echo "Go to <br><br>
<ul>
<li><a href='assi1.php'>solve Question 1 </a></li>
<li><a href='form2.php'>solve Question 2 </a></li>
<li><a href='assi3.php'>solve Question 3 </a></li>
<li><a href='assi4.php'>solve Question 4 </a></li>
<li><a href='assi5.php'>solve Question 5 </a></li>
<li><a href='assi6.php'>solve Question 6 </a></li>
<li><a href='assi71.php'>solve Question 7- </a></li>
<li><a href='assi72.php'>solve Question 7-- </a></li>
<li><a href='assi8.php'>solve Question 8 </a></li>
<li><a href='form9.php'>solve Question 9 </a></li>
<li><a href='form10.php'>solve Question 10 </a></li>
<li><a href='form11.php'>solve Question 11 </a></li>
<li><a href='assi1.php'>solve Question 12 </a></li>

</ul>";
}
else 
{
	echo " Go <a href='login.php'>Login</a> <br/>";
}


?>

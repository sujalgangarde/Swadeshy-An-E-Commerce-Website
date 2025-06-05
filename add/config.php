<?php 

$connect=mysqli_connect("localhost","root","","swadeshy")
      or die(mysql_error($connect));
if ($connect) 
{
	echo "connected";
}
else
{
	echo "Error";
}
?>


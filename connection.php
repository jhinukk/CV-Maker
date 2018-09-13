<?php
$conn=mysqli_connect("localhost","jhini","password","jhinuk");

if(!$conn)
{
	echo "wrong connection";
}
else 
{
	echo "successful";
}
?>
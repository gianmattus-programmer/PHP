<?php

$con = mysqli_connect("localhost","root","","division_e");

if($con)
{
	echo "connect success";
}
else 
{
	echo "fail";
}

?>
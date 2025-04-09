<?php

$con = mysqli_connect("localhost","root","","codewithpatel"); //string host , string user , string password , database

if($con)
{
    echo "connected";
}

else
{
    echo "fail";
}
?>
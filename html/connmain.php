<?php
 
 
$localhost = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "amzon"; 


 $conn=mysqli_connect($localhost,$username,$password,$dbname);
if(!$conn)
{
    die("connectivity error".mysqli_connect_error());
    
}

else
{
    echo "connection is sucessful ";
}
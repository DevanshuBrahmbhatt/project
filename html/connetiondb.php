<?php
$host="localhost";
$user="root";
$password="";
    $conn= mysqli_connect($host, $user, $password);
    if(!$conn)
    {
         die("connectivity error ".mysqli_connect_error());
       
    }
 else {
     echo 'connection created succesfully';
}
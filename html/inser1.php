<?php
include 'connmain.php';
if(isset($_POST['devanshu']))
{
    $NAME=$_POST['NAME'];
    $SURNAME=$_POST['SURNAME'];
    $EMAIL=$_POST['EMAIL'];
    $PASSWORD=$_POST['PASSWORD'];
   $sql="insert into tbbooks(NAME,SURNAME,EMAIL,PASSWORD) values('$NAME','$SURNAME','$EMAIL','$PASSWORD')";
if(mysqli_query($conn,$sql))
{
    echo"inserted successfully";
}
else
{
    die("error is created".mysqli_error($conn));
}
}


    
    

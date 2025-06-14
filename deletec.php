<?php

include "config.php"; 

$id = $_GET['id']; 

$del = mysqli_query($conn,"delete from contact where msgid = '$id'"); 

if($del)
{
    mysqli_close($conn); 
    header("location:result.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>
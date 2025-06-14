<?php



include "config.php";



$id = $_GET['id'];



$del = mysqli_query($conn,"delete from voterregister where email = '$id'");



if($del)

{

    mysqli_close($conn);

    header("location:voter.php");

    exit;  

}

else

{

    echo "Error deleting record";

}

?>
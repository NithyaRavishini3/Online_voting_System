<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="../SRC/Styles/Home_Feedback.css">
    <title> PAN-OTING </title>
    <script src="../js/Script.js"></script>
</head>
<body>

<?php
require_once "config.php";


$email = $_GET['Email'];

$del = "delete from Feedback where Email = '$email'";
echo ($del);
echo("\n");



if(mysqli_query($conn, $del))
{
    echo "<script>alert('Record deleted successfully'); window.location.href='Feedback.php'; </script>";
    
    
}
else
{
    echo "<script>alert('Error deleting record'); window.location.href='Feedback.html'; </script>";// display error message if not delete
}

?>

</body>
</html>
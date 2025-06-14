<?php
include_once 'config.php';
?>

<?php


$uname = $_POST["uname"] ?? "";
$email = $_POST["email2"] ?? "";
$password = $_POST["password2"] ?? "";
$password1 = $_POST["password3"] ?? "";

if (isset($_POST['submit1'])) {
 if($password == $password1)
 {
   $sql = "INSERT INTO voterregister(uname, email, password) VALUES('$uname', '$email', '$password')";
 
      if(mysqli_query($conn, $sql)){
         header('Location:account.php');
      }

      else{
         echo "<script>alert('Account not created. This email address is already being used !')</script>";
      }
  }
  else{
     echo "<script>alert('Both Passwords are Not Matching. Go Back and Try Again')</script>";
  }
  
} 
 

?>





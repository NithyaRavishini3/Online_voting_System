<?php
include_once 'config.php';
?>

<?php


$fname = $_POST["fname"] ?? "";
$lname = $_POST["lname"] ?? "";
$email = $_POST["email"] ?? "";
$subject = $_POST["subject"] ?? "";
$message = $_POST["message"] ?? "";

if (isset($_POST['submit'])) {
 
   $sql = "INSERT INTO contact(fname, lname, email, subject, message) VALUES('$fname', '$lname', '$email', '$subject', '$message')";
 
      if(mysqli_query($conn, $sql)){
        ?>
        <script type="text/javascript">
           alert("Your message sent");
           
               window.location.href = "Contact.php";
        
           </script>
           <?php
      }

      else{
         ?>
         <script type="text/javascript">
           alert("Error: Try again");
           
               window.location.href = "Contact.php";
        
           </script>
           <?php
      }
 
  
} 
 

?>



<?php
include_once 'config.php';
?>
<?php
error_reporting(0);
  $email = $_POST["email"];
  $password = $_POST["password"];
  if(isset($_POST['forsubmit'])) {
    

    $sql="UPDATE voterregister SET password='$password' where email='$email'";
    $query = "SELECT email from voterregister where email = '$email' limit 1";
	$result = mysqli_query($conn, $query);
    if($result)
    {
        if($result && mysqli_num_rows($result) > 0)
        {
           if (mysqli_query($conn, $sql))
           {
    ?>
            <script type="text/javascript">
               alert("Password changed successful");
               window.location.href = "../php/Vote.php";
               </script>
               <?php
    
    
            }
        }
        else{

            echo "<script>alert('Error: Check your email again')</script>";
         
        }
    }
  
   

}

?>




<!DOCTYPE html>
<html>
<head>
   <title>Forgot password</title> 
   <link rel = "stylesheet" href = "../Styles/forgot.css">
   


</head>
<body>
    <div class="img" style="background-image: url('../images/blackhole.png');">
<br><br>
<center>
    <h1 class="set">SET A NEW PASSWORD</h1><br><br><br>
<form class="forgotform" method="POST" action="#">
    <label class="forname">Email: -</label><br><br>
    <input class="forenter" name="email" type="email" placeholder="&nbsp;&nbsp;Enter e-mail" id="Email" required/><br><br><br><br><br>
    <label class="forname">New Password: -</label><br><br>
    <input class="forenter" name="password" type="password" placeholder="&nbsp;&nbsp;Password" id="password" required/><br><br><br><br><br>
   
    <a href="Vote.php"> <button class="submit" type="submit" name="forsubmit">Submit</button></a>
</form>
</center>
</div>
</body>

</html>
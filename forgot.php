<?php
include_once 'config.php';
?>

<?php

  error_reporting(0);
  $email = $_POST["user_name"];
  $password = $_POST["password"];
  
  if(isset($_POST['submit'])) {
	  
    $sql="UPDATE users SET password='$password' where email='$email'";
    $query = "SELECT email from users where email = '$email' limit 1";

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
               window.location.href = "login.php";
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

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="utf-8" />
    <title></title>
<style>
.form {
    position:relative;
    margin-top: 50px;
    width: 450px;
    height: auto;
    background-color: #7c23e8;
    border-style: solid;
}
.label{
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:35px;
    font-weight:bold;
    color:black;
}
.forgot {
    padding: 20px 40px;
	margin:auto;
 }
.forgot .font {
    font-size:20px;
    color:black;
    font-weight:bold;
    margin:5px 0;
    text-align:left;
 }
.forgot input{
    height:40px;
    width:350px;
    padding:0 10px;
    font-size:18px;
    outline:none;
    margin-bottom:20px;

}
 .forgot .font2 {
        font-size: 20px;
        color: black;
        font-weight: bold;
        margin: 5px 0;
        text-align: left;
}

.forgot button {
    background-color: black;
    color: white;
    height:45px;
    width:372px;
    margin-top:8px 0; 
    border: none;
    cursor: pointer;
    font-size:15px;
}


.forgot button:hover {
    background-color: darkcyan;
}

</style>
</head>
<body>

<center>
<div class="form"> 
            <br />
            <center>
                <h1 class="label">Forgot Password</h1>
            </center>
            <form class="forgot" method="post">
                <div class="font">Email</div>
                <input type="text" placeholder="email" name="user_name" required  />
                <div class="font2" >Password</div>
                <input type="password" placeholder="Password" name="password" required />

              <br><br>
                <button type="submit" value="Login" name="submit">Update</button>
               
	     </form>

           <br><br>
        </div>

</center>

</body>
</html>
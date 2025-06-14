<?php 

session_start();

	include("config.php");
	include("loginc.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "SELECT * from voterregister where email = '$email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: account.php");
						die;
					}
				}
			}
			
			echo "<script>alert('wrong Email or password!')</script>";
		}else
		{
			echo "<script>alert('wrong Email or password!')</script>";
		}
	}
?>





<!DOCTYPE html>
<html>
<head>
   <title>Voter Login</title> 
   <link rel = "stylesheet" href = "../Styles/vote.css">
   <script type="text/javascript" src="../js/vote.js"></script>
   
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   <video autoplay muted loop id="myVideo">
      <source src="voter.mp4" type="video/mp4">
    </video>



    <div class="header">
        <img src="../images/logo.png" alt="logo">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <center><h1><b>PAN-OTING</b></h1></center>
    
    <center>
        <h2>VOTING MADE EASY.</h2>
    </center>

    <div class="topnav">

        <a href="../html/Homepage.html">Home</a>
        <a href="../html/Events.html">Events</a>
        <a href="../php/Contact.php">Contact Us</a>
        <a href="../html/aboutus.html">About Us</a>
        <a href="../html/Feedback.html">Feedback</a>

    </div>
    </div>
   
   <br>
   <br><br><br<br><br><br><br>
   <b class="title"><center>VOTER ACCOUNT LOGIN</center></b>
   <br>
   <br><br>
   <center><img class ="user" src="../images/user.png" alt="User"></center>
   <br><br>
   <div2>
      <form class="form1" method="POST">
     
        <lable class="EPname" for="Email"><b>&nbsp; &nbsp; &nbsp; &nbsp; Email:-</b></lable>
         <input class="EPenter" type="email" placeholder="&nbsp;&nbsp;&nbsp;abcd@gmail.com" id="Email"  name="email" required/>
        <br><br><br>
         <label class="EPname" for="password">Password&nbsp;:-</label>
         <input class="EPenter"  type="password" placeholder="&nbsp;&nbsp;&nbsp;password" id="password" name="password" required/>
         <span onclick="myFunction()" class="eye">
         <i id="hide1" class="fas fa-eye"></i>
          <i id="hide2" class="fas fa-eye-slash"></i>
         </span>

         <br>
         <li class="forgot"><a href="forgotc.php">Forgot your password</a></li>
         
         <input class="checkb" type="checkbox" id="staysignin" name="staysignin" value="staysignin">
         <label class="checkbname" for="staysignin"> Stay Signed in</label>
         <br>
         <h class="stayre">Using a public or shared device?</h><br>
         <h class="stayre">Uncheck to protect your account.</h><br><br>
         <center><button class="button1" type="submit" name="signin" >SIGN IN</button></center>
         </form>
      
      <form class="form1" action="register.php" method="POST">
       <p class="new">If you are a new user, Join with us!</p><br>
       <lable class="Regname" for="uname"><b>User Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</b></lable>
         <input class="Regnameenter" type="name" placeholder="Enter username" id="uname" name="uname" required/>
        <br><br><br>
         <label class="Regemail" for="Email1">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</label>
         <input class="Regemailenter" type="email" placeholder="abcd123@gmail.com" id="Email1" name="email2" required/>
         <br><br><br>
         <lable class="Regpaswrd" for="password1"><b>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:-</b></lable>
         <input class="Regpaswrdenter" type="password" placeholder="Enter password" id="password1" name="password2"  required/>
        <br><br><br>
        <lable class="Regrepaswrd" for="password2"><b>Re-Enter Password:-</b></lable>
         <input class="Regrepaswrdenter" type="password" placeholder="Re-enter Password" id="password2" name="password3" required/>
         <span onclick="myFunction1()" class="eye1">
            <i id="hide3" class="fas fa-eye"></i>
             <i id="hide4" class="fas fa-eye-slash"></i>
            </span>
            <br><br>
            <center><button class="button2" onclick="myFunction3()" value="submit1" type="submit" id="submit1" name="submit1">JOIN</button></center>
            <br>
            
            <a class="google" href="https://www.google.lk">LOG IN WITH GOOGLE&nbsp;&nbsp;<i class="fa fa-google" style="font-size:18px"></i></a>
            <a class="twitter" href="https://www.twitter.com">LOG IN WITH TWITTER&nbsp;&nbsp;<i class="fa fa-twitter" style="font-size:18px"></i></a>
            <a class="facebook" href="https://www.facebook.com">LOG IN WITH FACEBOOK&nbsp;&nbsp;<i class="fa fa-facebook-f" style="font-size:18px"></i></a>
       
        <br><br><br>

    </form>

   </div2>
<br>
<b></b>
<div class="footer">
   <p class="panvoting">PAN-OTING</p>
</div>
<div class="footdown">
   <p class="footcate">
     <a class="footcate1" style="text-decoration: none;" href="#"> Terms and Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" style="text-decoration: none;" href="#"> Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" style="text-decoration: none;" href="#"> Cookie Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" style="text-decoration: none;" href="#">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" style="text-decoration: none;" href="#"> Help</a>
     <span class="ico">
     <a class="footcate1" href="https://www.facebook.com"><i class="fa fa-facebook-f" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" href="https://www.twitter.com"><i class="fa fa-twitter" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" href="https://www.instagram.com"><i  class="fa fa-instagram" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="footcate1" href="https://www.gmail.com"><i class="fa fa-google" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>
   </p>
   
   <center><p class="copyrighted">© 2021 PAN-OTING. All right reserved</p></center>
</div>

  
</body>
</html>

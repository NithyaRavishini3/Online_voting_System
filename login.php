<?php 

session_start();

	include("config.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where email= '$user_name' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: admin.php");
						die;
					}
				}
			}
			
				echo "<script>alert('wrong username or password!')</script>";
		}else
		{
			echo "<script>alert('wrong username or password!')</script>";
		}
	}

	

?>



<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Admin log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Styles/panoating.css" >
        <script src="../js/panoating.js"></script>
    </head>
<body>
   
		
		<div class="header">
        <img src="../images/logo.png" alt="username" style="float:left; margin-right:5%;margin-top:1%;border-radius:50%;" width="100" height="100">
      
        <center><h1><b>PAN-OTING</b></h1></center>
			</br/><br/>
			<center>
				<h2 style ="font-size:40px ; color :white; text-indent: 500px">VOTING MADE EASY.</h2>
			</center>
			<br/>
			<div class="topnav">

        <a href="../html/HomePage.html">Home</a>
        <a href="../html/Events.html">Events</a>
        <a href="../php/Contact.php">Contact Us</a>
        <a href="../html/aboutus.html">About Us</a>
        <a href="../html/Feedback.html">Feedback</a>

    </div>
    </div>
    <br><br>
    <center>
        <h1 style = "color: white"><b>ADMIN  LOG  IN </b></h1>
		<center>
		  <img src="../images/User.png" alt="username" style="border-radius:50%" width="100px" height="100px">
		  </center>
    </center>
	<br>
	<center>
		
        <div class="container"> 
            <br />
            <center>
                <h1 class="label">Log in with your email<br />account</h1>
            </center>
            <form class="Admin-login" method="post">
                <div class="font">Email</div>
                <input type="text" placeholder="email" name="user_name" />
                <div class="font2" >Password</div>
                <input type="password" placeholder="Password" name="password" />
                <button type="submit" value="Login">Login</button>
                <p class="forgot"><a href="../php/forgot.php">Forgot your password?</a></p>
	     </form>
        </div>
    </center>
    <br />
    <center>
        <p style = "color: white">If you are a new user,<b>Sign up</b></p>
    </center>
    <br />
    <div id="signup-box">
        <div id="left-box">
            <form method="post" action="signup.php" >
            <h1 class="label">SIGN UP</h1>
            <input class="U" type="text" name="user_name" placeholder="Username" />
            <input class="U" type="email" name="email" placeholder="ABC@gmail.com" />
            <input class="U" type="password" id="password"  name="password" placeholder="Password"/>

            <button type="submit" >SIGN ME UP</button>
        </div>
        <div id="right-box">

            <h1 class="sign">Sign in with<br />your social network </h1>
            <center>
                <button class="social" type="submit"><a href="https://www.facebook.com/">LOG IN WITH FACEBOOK</a></button><br />
                <button class="social" type="submit"><a href="https://ads.twitter.com/login">LOG IN WITH TWITTER</a></button><br />
                <button class="social" type="submit"><a href="https://www.google.com/">LOG IN WITH GOOGLE+</a></button><br />
            </center>
        </div>
        <div class="OR">or</div>
        </form>
    </div>

	
	
    <div class="footer">
        <k class="panvoting">PAN-OTING</k>
    </div>
    <div class="footdown">
        <H class="footcate">
            <b>
                <a style="text-decoration: none;" href="#"> Terms and Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;" href="#"> Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;" href="#"> Cookie Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;" href="#">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a style="text-decoration: none;" href="#"> Help</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.facebook.com"><i class="fa fa-facebook-f" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.twitter.com"><i class="fa fa-twitter" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="https://www.gmail.com"><i class="fa fa-google" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </br>

        </H>
        <center><br><br><br><br><H class="copyrighted">© 2021 PAN-OTING. All right reserved</H></center>
    </div>
	 </body>
</html>



<html>
    <head>
        <title>Contact Us</title> 
   <link rel = "stylesheet" href = "../Styles/contact.css">
   <script type="text/javascript" src="../js/Contact.js"></script>


   <script src='https://www.google.com/recaptcha/api.js'></script>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body onLoad="ChangeCaptcha()">

        <video autoplay muted loop id="myVideo">
            <source src="video.mp4" type="video/mp4">
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
            <br><br><br><br>
            <h3 class="title"><center><b>Leave us a Message!</b></center></h3>
             <br><br><br><br><br>

             
              
           
                <form class="inputs" action="message.php" method="post">

                <center>
                    <lable class="names" for="fname"><b>&nbsp; &nbsp; &nbsp; &nbsp; First Name:-</b></lable><br>
                    <input class="enters" type="name" placeholder="&nbsp;&nbsp;&nbsp;First Name" id="fname" name="fname" >
                    <br><br><br>
                    <lable class="names" for="lname"><b>&nbsp; &nbsp; &nbsp; &nbsp; Last Name:-</b></lable><br>
                    <input class="enters" type="name" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;Last Name:-" id="lname" name="lname" >
                    <br><br><br>
                    <lable class="names" for="Email"><b>&nbsp; &nbsp; &nbsp; &nbsp; Email:-</b></lable><br>
                    <input class="enters" type="email" placeholder="&nbsp;&nbsp;&nbsp;example@gmail.com" id="email" name="email" required/>
                    <br><br><br>
                    <lable class="names" for="subject"><b>&nbsp; &nbsp; &nbsp; &nbsp; Subject:-</b></lable><br>
                    <input class="subject" type="suject" id="subject" name="subject">
                    <br><br><br>
                    <input class="message" type="text" placeholder="Message" id="message" name="message">
                    <br>
                    <input class="checkbox" type="checkbox" id="agree" name="agree" value="agree" required/>
                    <label class="checkbname" for="agree"> I agree to the <a class="privacy" href="#">privacy policy</a> and <a class="privacy" href="#">terms of services</a></a></label>

                    <br><br>
                    <input type="text" id="randomfield" disabled required/>  
		                <br><br>
	
		                <input id="CaptchaEnter" size="20" maxlength="6" required/> 
	
		                <br><br>
	
		                <button id="sub" type="submit" name="submit" class="button" onclick="check()">Submit</button>
                    </center>
            </form>
           
            <br>
<b></b>
    <div class="footer">
        <p class="panvoting">PAN-OTING</p>
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
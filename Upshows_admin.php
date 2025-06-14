<?php
	include_once 'config.php' ;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Upcoming shows</title>
		<link rel = "stylesheet" href = "../Styles/Events.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body style = "background :  #8080ff">
	
		<!------------header-------------->
		
		<div class="header">
        <img src="../images/logo.png" alt="logo">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <center><h1><b>PAN-OTING</b></h1></center>
			</br/><br/>
			<center>
				<h2 style ="font-size:18px ; color :white">VOTING MADE EASY.</h2>
			</center>
			<br/>
			<div class="topnav">

        <a href="../html/Events.html">Home</a>
        <a class="active"href="#">Events</a>
        <a href="../php/Contact.php">Contact Us</a>
        <a href="../html/about.html">About Us</a>
        <a href="../html/Feedback.html">Feedback</a>

		</div>
		</div>
			
		
	
		<h4> <a href = "Events.html">Events</a> >  <a href = "#"> Upcoming shows </a></h4>
		<br/>
		<center><h1 style="font-size:60px; color : #00004d">Upcoming Shows</h1></center>
		
		<h3><p>Here are the upcoming reality shows that you will be able to vote through PAN-OTING.
		Stay connected with us and enjoy your favourite shows.</p></h3>
		
		
		<button type="button" onclick ="location.href='../html/addShows.html';" style ="color :white ;background:green">Add New Show</button>
		<br/><br/>
		
		<!-----------------------------Upcoming Shows Galary---------------------------------->
		<?php
						
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "PAN-OTING";

			//       Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			//       Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT * FROM upcomingshows";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  //      Output data of each row
			  while($row = $result->fetch_assoc()) {
									
							echo "<div class=\"ushows\" style =\"height : 680px\"> " ;
							echo "<img src=".$row["file_name"]." alt=\"Making dance\" width=\"600\" height=\"400\">" ;
							echo "<div class=\"desc\" style = \"height : 373px\"><br/>" ;
							echo "<h1 style = \"font-size : 45px; color : #330033\">".$row["show_name"]."</h1><br/><br/>"   ;
							echo "<h2>Starting<br/>Date<br/>".$row["starting_date"]."</h2></div>" ;
							echo "</div>" ;
						}
					}
				else{
							echo "No Result !" . $conn->error;
							
				}
				
		$conn->close()
		?>
		

	
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		
		<!------------footer----------------->
		
		<div class="footer">
		<div><hr> <h2 style ="color :white;position :relative;left:1100px">PAN-OTING</h2>
		<hr></div>
		
			<p class="links">
				<a href="#"> Terms and Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"> Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"> Cookie Settings</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="#"> Help</a>
				<span class="right">
					<a href="https://www.facebook.com"><i class="fa fa-facebook-f" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="https://www.twitter.com"><i class="fa fa-twitter" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="https://www.instagram.com"><i class="fa fa-instagram" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="https://www.gmail.com"><i class="fa fa-google" style="font-size:24px"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</span>
			</p>
		   
		<br />
		   
		<center><h6 class="copyrighted" style = "font-size = 10px;color:white">© 2021 PAN-OTING. All right reserved</h6></center><br/>
		</div>
		</div>
	
	</body>
</html>
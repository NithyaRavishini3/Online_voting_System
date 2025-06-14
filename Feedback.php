<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="../Styles/Home_Feedback.css">
    <title> PAN-OTING </title>
    <script src="../js/Script.js"></script>
</head>
<body>

<!--Start of header-->

    <div class="header">
        <img src="../images/logo.png" alt="logo">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
      rel="stylesheet" 
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
        <center><h1><b>PAN-OTING</b></h1></center>
    </div>
    <center>
        <h2>VOTING MADE EASY.</h2>
    </center>

    <!--Navigation bar-->

    <div class="topnav">

        <a href="../html/HomePage.html">Home</a>
        <a href="../html/Events.html">Events</a>
        <a href="../php/Contact.php">Contact Us</a>
        <a href="../html/aboutus.html">About Us</a>
        <a class="active" href="../html/Feedback.html">Feedback</a>

    </div>

    <div class="rectangle">
   

    
<?php

require_once 'config.php';



if(isset($_POST['submit'])){

    $Rating = $_POST["rate"] ?? "";
    $Email = $_POST["email"] ?? "";
    $Comment = $_POST["comment"] ?? "";

    $sql ="INSERT INTO Feedback(Email,  Rating, Comment)VALUES('$Email', '$Rating', '$Comment')";

    if($conn->query($sql)){
        echo "<div class='j'><br>Thank you for your feedback!</div>";
        echo "<br><hr><br><br><br><br><br><br>";
    }
    
    else{
        echo "<div class='j'><br>Something terrible happened. Please try again.</div>" .$conn->error;
        echo "<br><hr><br><br><br><br><br><br>";
    }

    $feedbackReport = fopen("FeedbackRep.txt", "a+") or die("File Error!");
    $text =$Email . "\n" . $Rating . "\n" . $Comment . "\n\n\n";
    
    fwrite($feedbackReport, $text);

    fclose($feedbackReport);
}
else{
    echo " ";
}
?>

<?php

$sql = "select * from Feedback";
$result = mysqli_query($conn, $sql);
$checkResult = mysqli_num_rows($result)>0;

echo ("<div class='k'><br>Ratings and reviews</div>

<style>
    .k {
        font-family: Calibri, Arial, sans-serif;
        color: #40464f;
        font-size: 50px;
        text-align: left;
        position: relative;
        margin: 80px 30px 100px;
        }
        
");



if($checkResult){
           

    while($row = mysqli_fetch_assoc($result)){
            $email = $row['Email'];
            $rate = $row['Rating'];
            $comment = $row['Comment'];
           

            echo ("


                <!--content-->
                <style>



                section {
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    position: relative;
                    }

                    .j {
                    font-family: Calibri, Arial, sans-serif;
                    color: #5024a6;
                    font-size: 65px;
                    text-shadow: 2px 2px 0 #bcbcbc, 4px 4px 0 #9c9c9c;
                    text-align: center;
                    position: relative;
                    margin: 80px 0px 200px;

                    }

                                     
                    .box-container {
                    width: 100%;
                    height: auto;
                    max-width: 80rem;
                    position: relative;
                    margin: 10px auto;
                    padding: 0 1.5rem;
                    }
                                    
                    .faq-card {
                    background-color: #c6c9cf;
                    border-radius: 10px;
                    margin-bottom: 10px;
                    position: relative;
                    height: auto;
                    padding: 7px;
                    box-shadow: 4px 4px 15px -2px rgba(0,0,0,0.74);
                    }
                  
                    .com-link {
                    font-size: 25px;
                    color: rgb(32, 30, 30);
                    width: 100%;
                    position: relative;
                    text-decoration: none;
                    text-align: left;
                    display: flex;
                    font-family: Calibri, Arial, sans-serif;
                    justify-content: space-between;
                    align-items: center;
                    padding: 15px 12px;
                    }

                    a:link{
                        color: #441b7a;
                        text-decoration: none;
                    }

                    a:hover{
                        color: red;
                    }

                                        
                

                </style>

                


                <section>
                    <div class='box-container'>
                        <div class='box'>
                            <div class='faq-card' id='quesion1'>
                                <div class='com-link'>
                                
                                User Email: ".$email. "<br> Star Rating: ".$rate."/★★★★★ <br> Comment: ".$comment. "<br> 
                                <div> 
				                    <a href='DeleteCom.php?Email=$email'>Delete</a>

                                </div> 
                                <i class='fas fa-comments'></i>
                                
                                </div>
                            </div>
                        <div>
                    </div>
                </section>
                
            ");     

    }

}else{
    echo "No results";
    
}

?>

<!--Footer-->

    </div>

    <div class="footer2">
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
<?php
require 'config.php' ;


if (isset($_POST['upload'])) {
  
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;

		$sname = $_POST  ["showname"] ;
		$date = $_POST ["startdate"] ;

  
   // Get all the submitted data from the form
   
        $sql = "INSERT INTO upcomingshows ( show_name, starting_date, file_name)  VALUES ('$sname', '$date','$filename')" ;
		
		
				$db = mysqli_connect("localhost", "root", "", "PAN-OTING");

		        mysqli_query($db, $sql);
		
		// Upload image file 
		
		 if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

		// Display alert
		
				
		if (mysqli_query($conn, $sql)) {
		  echo "New record created successfully";
		}
		else {
			echo "<script>alert ('Error : Couldnt execute the query !!!') </script>"; 
		
		}
			echo $sql . $conn->error ;
}

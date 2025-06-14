<?php
require 'config.php' ;


if (isset($_POST['upload'])) {
  
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;

	$sname = $_POST  ["showname"] ;

  
   // Get all the submitted data from the form
   
        $sql = "INSERT INTO ongoingshows ( show_name,  file_name)  VALUES ('$sname','$filename')" ;
		
		
				$db = mysqli_connect("localhost", "root", "", "PAN-OTING");

		        mysqli_query($db, $sql);
		
		// Upload image file 
		
		 if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
		
		// Display alert
		
		if ( mysqli_query($conn, $sql) ) {
			echo "<script>alert ('Record added successfully!') </script>";
		}	
		
		else {
			echo "<script>alert ('Error : Couldnt execute the query !!!') </script>"; 
		
		}
			echo $sql ;
}
?>
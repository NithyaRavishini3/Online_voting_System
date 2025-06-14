<?php

$brooke = $_POST['brooke'];
$josh = $_POST['josh'];
$dustin = $_POST['dustin'];
$lea = $_POST['lea'];
$aidan = $_POST['aidan'];

// include db connection 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PAN-OTING";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else
	$stmt = $conn->prepare("Insert into votecount(brooke,josh,dustin,lea,aidan)
			values(?, ?, ?, ?, ?) ");
			$stmt->bind_param("sssss",$brooke,$josh,$dustin,$lea,$aidan);
			$stmt->execute();
			$stmt->store_result();
			echo "Data Received Sucessfully";
			$stmt->close();
			$conn->close();
	
?>
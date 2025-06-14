<?php
session_start();



include("config.php");
include("loginc.php");



$user_data = check_login($conn);



?>



<!DOCTYPE html>
<html>
<head>
<title>My website</title>
</head>
<body>



<a href="logoutc.php">Logout</a>
<h1>This is the index page</h1>



<br>

<script>
alert("Hello, <?php echo $user_data['email']; ?>");
document.write(date());
</script>

</body>
</html>
<?php
include_once 'config.php';
?>

<?php $results = mysqli_query($conn, "SELECT * FROM voterregister"); ?>
<html>
    <head>
        <title>Admin Result</title>
</head>
<body>
<style>
    body{
        background-color:#1e0b4a;
    }
    
  h1{
      padding:10px;
      color: white;
      background-color:#491687;
      font-size:40px;
     
  }
    .title{
        font-size:30px;
        padding:10px;
        border:1px solid black;
        width:350px;
        background-color:linen;
    }
    .box{
        font-size:20px;
        padding:10px;
        border:1px solid;
        background-color:blue;
        color:white;
        font-weight:bold;

    }
    button{
        margin-right:25px;
        width:100px;
        border-radius:15px;
        color:white;
        font-weight:bold;
		height:30px;
    }
	button a{
		text-decoration:none;
	}
	button a:hover{
		color:cyan;
	}
	
    </style>
    <center><h1>Manage Voter Accounts</h1></center>
    <form method="post">
<table class="table">
	<thead>
		<tr>
			
            <th class="title">Name</th>
            <th class="title">Email</th>
			<th class="title">Password</th>
			<
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { 
      
        ?>
		<tr>
			
			<td class="box"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['uname']; ?></td>
            <td class="box">&nbsp; &nbsp;<?php echo $row['email']; ?></td>
            <td class="box">&nbsp; &nbsp;<?php echo $row['password']; ?></td>
           
			<td class="box1">
			<button><a class="del"href="../php/delete.php?id=<?php echo $row['email']; ?>"> Delete</a></button>
			</td>
		</tr>
	<?php
   
    }
 
    ?>
</table>

</form>
</body>
</html>
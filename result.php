<?php
include_once 'config.php';
?>

<?php $results = mysqli_query($conn, "SELECT * FROM contact"); ?>
<html>
    <head>
        <title> ContactUs Result</title>
</head>
<body>
<style>
    body{
        background-color:green;
    }
    
  h1{
      padding:10px;
      color: white;
      background-color:black;
      font-size:40px;
     
  }
    .title{
        font-size:30px;
        padding:10px;
        border:1px solid;
        width:350px;
        background-color:pink;
    }
    .box{
        font-size:20px;
        padding:10px;
        border:1px solid;
        background-color:darkblue;
        color:orange;
        font-weight:bold;

    }
    .del{
        margin-right:25px;
        text-decoration:none;
        padding:12px;
        border-radius:15px;
        background-color:red;
        color:white;
        font-weight:bold;
    }
    .del:hover{
        color:grey;
        background-color:darkred;
    }
    
    </style>
    <center><h1><u>R e c e i v e d</u> &nbsp; &nbsp;  <u>M e s s a g e s</u></h1></center>
    <form method="post">
<table class="table">
	<thead>
		<tr>
			<th class="title">First Name</th>
            <th class="title">Last Name</th>
            <th class="title">Email</th>
			<th class="title">Subject</th>
			<th class="title">message</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { 
      
        ?>
		<tr>
			<td class="box"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo  $row['fname']; ?></td>
			<td class="box"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['lname']; ?></td>
            <td class="box">&nbsp; &nbsp;<?php echo $row['email']; ?></td>
            <td class="box">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['subject']; ?></td>
            <td class="box">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row['message']; ?></td>
			<td class="box1">
				<a class="del" href="deletec.php?id=<?php echo $row['msgid']; ?>"> Delete</a>
			</td>
		</tr>
	<?php
   
    }
 
    ?>
</table>

</form>
</body>
</html>


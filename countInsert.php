<?php
require_once 'config.php';



if($_POST['form_name'] == 'AidanBryant'){
 //insert into candi (name,count) values ($name, "1");
  echo json_encode("success");
   
  $name  = $_POST['name'];
  $sql = "INSERT INTO candi (name, count)
VALUES ($name,'1')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}else if($_POST['form_name'] == 'BrookeSimpson'){
  $name  = $_POST['name'];
  $sql = "INSERT INTO candi (name, count)
VALUES ($name,'1')";


}else if($_POST['form_name'] == 'DustinTavella'){
  $name  = $_POST['name'];
  $sql = "INSERT INTO candi (name, count)
VALUES ($name,'1')";


}else if($_POST['form_name'] == 'joshBlue'){

  $name  = $_POST['name'];
  $sql = "INSERT INTO candi (name, count)
VALUES ($name,'1')";

}else if($_POST['form_name'] == 'leakyle'){

  $name  = $_POST['name'];
  $sql = "INSERT INTO candi (name, count)
VALUES ($name,'1')";

}
mysqli_close($conn);
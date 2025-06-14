<?php
include_once 'config.php';
?>

<?php
if (isset($_POST['signin'])) {
    $errors = array();

    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        $errors[] = 'Email is Missing / Invalid';
    }
    
    if (!isset($_POST['pswd']) || strlen(trim($_POST['pswd'])) < 1) {
        $errors[] = 'Password is Missing / Invalid';
    }

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['pswd']);
        $hashed_password = sha1($password);

        $query = "SELECT * FROM voterregister
                  WHERE email = '{$email}'
                  AND password = '{$hashed_password}'
                  LIMIT 1";

        $result_set = mysqli_query($connection, $query);
        if ($result_set){
            if (mysqli_num_rows($result_set) == 1){
                header('Location:account.php');
               }
            else{
                $errors[] = 'Invalid email / password';
               }
         }
     else{
                $errors[] = 'Database query failed';
         }
     }          
 }


?>

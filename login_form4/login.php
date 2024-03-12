<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "admission_info";
$myDB  = new mysqli("$host, $user, $password, $database");
$e = $_POST['e'];
$p = $_POST['p'];
$sql = "SELECT * FROM user WHERE email = '$e' AND password = '$p'";

  $result = $myDB->query($sql);
if($result->num_rows>0){
    echo "Login Successfully";
}
 else{
    echo "Login Failed";
 }




?>
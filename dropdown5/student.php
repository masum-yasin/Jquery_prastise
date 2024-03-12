<?php 
$myDB = new mysqli("localhost","root","","student");
$id = $_POST['id'];
$sql = "SELECT * FROM student WHERE Batch = '$id'";
$result = $myDB->query($sql);
if($result->num_rows>0){
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <?php 
    $myDB = new mysqli("localhost","root","","ajax_evidence");
    $sql = "SELECT * FROM  batch_info";
    $result =$myDB->query($sql);
 ?>
 <h1>Student Batch Info</h1>
 <form action="">
    <select  id="batch_id">
        <option value="">Select One</option>
        <?php 
        while($row = $result->fetch_object()){
     ?>
        <option value="<?php echo $row->Id ?>"><?php echo $row-> Btc_Name?></option>
        <?php } ?>
    </select>
    </form>
    <div id="#showresult"></div>
    <script>
        $(document).ready(function(){
            $("#batch_id").change(function(){
                // alert($("#batch_id").val());
                var batch_id = $("#batch_id").val();
                $.post("student.php", {id:batch_id}, function(data,status){
                    $("#showresult").val();
                })
            })
        })
    </script>
</body>
</html>
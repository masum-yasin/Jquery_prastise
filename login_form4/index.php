<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <h1>Login Form</h1>
    <form action="">
        <input type="text" name="email" id="email" placeholder="Enter Your Email">
        <input type="password" name="password" id="password" placeholder="Enter your Password"><br>
        <input type="button" id="LoginID" value="Login">
    </form>
    <div id="Showdata"></div>
    <script>
        $(document).ready(function(){
            $('#LoginID').click(function(){
                // alert($("#email").val())
                var email = $("[name='email']").val();
                var  password = $("[name ='password']").val();
                $.post('login.php',{e:email,p:password}, function(data,status){
                    $("#Showdata").html();
                })
            })
        })
    </script>
</body>
</html>
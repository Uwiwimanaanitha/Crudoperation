<?php
session_start();
if(isset($_SESSION['username'])){
header("location:home.php");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>login form</h1><br>
<form action="" method="post">

<label for="">username</label> <input type="text" name="username"  value="
<?php
if(isset($_COOKIE['username'])){

    echo $_COOKIE['username'];
}


?>
"><br>
<label for="">password</label> <input type="password" name="password"  value="

<?php
if(isset($_COOKIE['password'])){

    echo $_COOKIE['password'];
}


?>


"><br><br>

<input type="submit" name="submit" id="" value="login"><br>

</form>
</body>
</html>

<?php

include_once("connection.php");
if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $password  = $_POST['password'];

 $query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password ='$password'");
 if(mysqli_num_rows($query)==1){

$_COOKIE['username']=$username;
$_COOKIE['password']=$password;

setcookie("username",$username,time() + 120);
setcookie("password",$password,time() + 120);








    $_SESSION['username']=$username;
    header("location:home.php");
 }   
else{


    echo"<span> user not found</span>";
}




}





?>
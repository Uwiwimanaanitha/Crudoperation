
<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");
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
    <h1>ADD NEW STUDENT</h1>
    <form action="" method="post">
        <label for="fname">fname</label>
        <input type="text" name="fname" id=""><br>
        <label for="lname">lname</label>
        <input type="text" name="lname" id=""><br>
        <label for="dept">dept</label>
        <input type="text" name="dept" id=""><br>
        <input type="submit" name="submit" id="" value="add"><br>
    </form>
</body>
</html>
<?php
include_once("connection.php");

if(isset($_POST["submit"])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dept=$_POST['dept'];
if(empty($fname)){
    echo"<span>fname is required</span><br>";
}

if(empty($lname)){
    echo"<span>lname is required</span><br>";
}
if(empty($dept)){
    echo"<span>department is required</span><br>";
}

if(!preg_match("/^[a-zA-Z ]*$/",$fname)){

echo"<span>only letter is allowed on fname<span><br>";

}


if(!preg_match("/^[a-zA-Z ]*$/",$lname)){

    echo"<span>only letter is allowed on lname<span><br>";
    
    }   
if(!preg_match("/^[a-zA-Z0-9 ]*$/",$dept)){

    echo"<span>only letter and number is allowed in dept<span><br>";
    
    }

    

    if(!empty($fname) && !empty($lname) && preg_match("/^[a-zA-Z ]*$/",$fname) &&preg_match("/^[a-zA-Z ]*$/",$lname) &&preg_match("/^[a-zA-Z0-9 ]*$/",$dept) && !empty($dept) ){

$query=mysqli_query($conn,"INSERT INTO tb(fname,lname,dept) VALUES('$fname','$lname','$dept')");

if($query){

    // echo"<span>data inserted <span><br>";
    header("location:home.php");

}
else{
    echo"<span>data not inserted</span><br>";
}
    }
    
    
















}
?>
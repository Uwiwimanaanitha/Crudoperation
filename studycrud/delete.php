<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");
}
?>
<?php
include_once("connection.php");
$id = $_GET['id'];

$q=mysqli_query($conn,"SELECT * FROM tb WHERE id='$id'");

if(mysqli_num_rows($q)>0){

$query = mysqli_query($conn,"DELETE FROM tb WHERE id ='$id'");

if($query){

    header("location:home.php");
}
else{
    echo"not found";
}

}
else{


    echo"<span> no student found</span>";
}



?>

<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");
}
?>
<?php
include_once("connection.php");
$id = $_GET['id'];

$query  = mysqli_query($conn,"SELECT * FROM tb WHERE id='$id'");
if(mysqli_num_rows($query)>0)
{

    while($row = mysqli_fetch_array($query)){
echo"
<h3>update student information</h3><br>
<form action='' method='post'>
<label for='fname'>fname</label>
<input type='text' name='fname' value=".$row[1]."><br>
<label >lname</label>
<input type='text' name='lname' value=".$row[2]."><br>
<label>dept</label>
<input type='text' name='dept' value=".$row[3]."><br><br>
<input type='submit' name='submit'  value='save changes'><br>
</form>
";
    }

    if(isset($_POST['submit']))
{

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dept=$_POST['dept'];

    $update=mysqli_query($conn,"UPDATE tb SET fname='$fname',lname='$lname', dept='$dept' WHERE id='$id'");
  

    if($update){

        header("location:home.php");
    }
    else{

        echo"failed to update data ";
    }





}








}
else{
    echo"<span> no student found</spane>";
}
?>


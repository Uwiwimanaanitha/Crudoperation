<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:index.php");
}
else{

    $username = $_SESSION['username'];
}
?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        a{text-decoration: none;}
       

      
        </style>
    </head>
    <body>
        <?php  echo "welcome ".$username; ?>
        <h1>List of all student</h1>
    <a href="add.php"><h2>Add new student</h2></a> 
    <a href="order.php"><h2>order items</h2></a> 
    </body>
    </html>
    <?php


    include_once("connection.php");

    $select= mysqli_query($conn,"SELECT * FROM tb");
    $a= mysqli_num_rows($select);

    if($a>0){

    echo"<table border='1'>
    <tr>
    <th>id</th>
    <th>first name</th>
    <th>last name</th>
    <th>department</th>
    <th>action</th>
    </tr>
    
    "  ;

    while($row = mysqli_fetch_array($select)){
    echo"<tr><td>".$row[0]."</td>";
    echo"<td>".$row[1]."</td>";
    echo"<td>".$row[2]."</td>";
    echo"<td>".$row[3]."</td>";
    echo"<td>  &nbsp;&nbsp; <a href='delete.php?id=".$row[0]."'> Delete </a>   &nbsp;&nbsp;&nbsp;&nbsp;  <a href='update.php?id=".$row[0]."'>   update </a>   &nbsp;&nbsp;</td></tr>";




    }






    }
    else{

        echo"<spane> No students found</a>";
    }
    ?>




<a href="logout.php"><h1>logout</h1></a>



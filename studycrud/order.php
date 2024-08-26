<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELECT ITEMS AND QUANTITY YOU WANT TO ORDER</h1><br>
    <form action="" method="post">

    <select name="product" >
	<option >shoes-3500FRW</option>
	<option  >t_shirt-23000FRW</option>
	<option >sochs-2300FRW</option>
	<option >sweatshirt-4,500FRW</option>
	</select><br>
<label for="">select qauntity</label><input type="number" name="quantity" id=""><br>
<input type="submit" name="submit" id="" value="order">

    </form>

</body>
</html>



<?php

if(isset($_POST['submit'])){

$item = $_POST['product'];
$quantity = $_POST['quantity'];

if(!empty($item) && !empty($quantity)){


    echo"
    
    <table border='1'>

    <tr>
<th>item name</th>
<th>item quantity</th>
    </tr>
    <tr>
<td>".$item."</td>
<td>".$quantity."</td>
    </tr>
    </table>
    ";


}







}
?>



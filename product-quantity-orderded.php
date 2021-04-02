<?php 
    include_once 'connect.php';

    if(isset($_GET['submit'])){
        $Pname=$_GET['Pname'];

        $stmt=$con->prepare("SELECT COUNT(quantityOrdered) FROM orderdetails WHERE productCode=(SELECT productCode FROM products WHERE productName=?)");
        $stmt->execute(array($Pname));
        $Qordered=$stmt->fetchAll();
        print_r($Qordered);




    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="product-quantity-orderded.php">
        <input type="text" placeholder="Enter Product Name" name="Pname">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
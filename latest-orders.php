<?php
include_once 'connect.php';

if(isset($_GET['submit'])){
$num=$_GET['number'];

$stmt=$con->prepare("SELECT * FROM orders  ORDER BY orderNumber DESC LIMIT $num  ");
$stmt->execute();
$orders=$stmt->fetch();
print_r($orders);
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
    <form method="get" action="latest-orders.php">
        <input type="number" placeholder="Enter Number" name="number">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
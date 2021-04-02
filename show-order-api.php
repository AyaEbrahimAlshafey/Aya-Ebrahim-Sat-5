<?php
include_once 'connect.php';

if(isset($_GET['submit'])){
$num=$_GET['number'];

$stmt=$con->prepare("SELECT * FROM orders WHERE orderNumber=?");
$stmt->execute(array($num));
$orders=$stmt->fetch();

echo json_encode($orders);


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
    <form method="get" action="show-order-api.php">
        <input type="number" placeholder="Enter Order Number" name="number">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
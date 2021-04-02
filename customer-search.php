<?php
include_once 'connect.php';

if(isset($_GET['submit'])){
$Cname=$_GET['Cname'];

$stmt=$con->prepare("SELECT customerName FROM customers  WHERE customerName LIKE '%$Cname%' OR customerName LIKE '$Cname%' OR customerName LIKE '%$Cname' OR customerName=$Cname  ");
$stmt->execute();
$Names=$stmt->fetchAll();
print_r($Names);
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
    <form method="get" action="customer-search.php">
        <input type="text" placeholder="Enter Search Name" name="Cname">
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>
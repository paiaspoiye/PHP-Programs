<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 7 Unit 4</title>
</head>
<body>
    <h3>Update Data in MySQL Table ushing MySQLi</h3>
    <?php
$conn=mysqli_connect("localhost","root","","users");

$sql="UPDATE users SET name='KayTwo' WHERE id=2";

if(mysqli_query($conn,$sql))
    {
        echo "Record Updated";
    }
?>

<h3>Update Data in MySQL Table using PDO</h3>
<?php
$conn=new PDO("mysql:host=localhost;dbname=users","root","");

$conn->exec("UPDATE users SET name='Ramesh' WHERE id=2");

echo "Record Updated";
?>
    
</body>
</html>
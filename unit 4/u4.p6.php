<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Data From MySQL Database</title>
</head>
<h3>MySQLi</h3>
<body>
    <?php
$conn=mysqli_connect("localhost","root","","users");

$sql="DELETE FROM users WHERE id=1";

if(mysqli_query($conn,$sql)){
echo "Record Deleted <br><br>";
}
?>
<h3>PDO</h3>
<?php
$conn=new PDO("mysql:host=localhost;dbname=users","root","");

$conn->exec("DELETE FROM users WHERE id=1");

echo "Record Deleted";
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Prepared Statement</title>
</head>
<body>
    <h3>MySQLi Prepared Statement</h3>
    <?php
$conn=mysqli_connect("localhost","root","","users");

$stmt=mysqli_prepare($conn,"INSERT INTO users(name,email,password) VALUES(?,?,?)");

$name="Moore";
$email="moore@gmail.com";
$password="0000";

mysqli_stmt_bind_param($stmt,"sss",$name,$email,$password);

mysqli_stmt_execute($stmt);

echo "Record Inserted";
?>

<h3>PDO Prepared Statement</h3>
<?php
$conn=new PDO("mysql:host=localhost;dbname=users","root","");

$stmt=$conn->prepare("INSERT INTO users(name,email,password)
VALUES(:name,:email,:password)");

$stmt->execute([
'name'=>'Moore',
'email'=>'moore@gmail.com',
'password'=>'0000'
]);

echo "Record Inserted";
?>
</body>
</html>
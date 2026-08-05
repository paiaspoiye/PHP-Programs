<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 5 Unit 4</title>
</head>
<body>
    <h3>Select Data From MySQL Database</h3>
    <?php
$conn=mysqli_connect("localhost","root","","users");

$result=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($result)){
echo $row['id']." ";
echo $row['name']." ";
echo $row['email']."<br>";
}
?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 8 Unit 4</title>
</head>
<body>
    <h3>Demonstrate Limit Data Selection in MySQLi</h3>

    <?php
$conn=mysqli_connect("localhost","root","","users");

$result=mysqli_query($conn,"SELECT * FROM users LIMIT 5");

while($row=mysqli_fetch_assoc($result))
    {
        echo $row['id']." ".$row['name']."<br>";
    }
?>
    
</body>
</html>
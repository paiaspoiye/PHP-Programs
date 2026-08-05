<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Connection-Program1 Unit4</title>
</head>
<body>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//$conn = new mysqli("localhost", "root", "", "test");

/* if ($conn){
    echo "database connected successfully";
}
else{
    echo "database connection failed";
} */
if (!$conn) 
    {
        die("Connection failed: " . mysqli_connect_error());
    }
else
    {
        echo "Database Connected successfully";
    }
$conn->close();

?>
</body>
</html>
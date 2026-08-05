<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQLi-Table</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "users");

        $sql = "CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR (100),
        email VARCHAR (100),
        password VARCHAR (100)
        )";

        if (mysqli_query($conn, $sql)) 
            {
                echo "table created successfully";
            }
            else 
            {
                echo "Error:" .mysqli_error($conn);
            }
    ?>
    
</body>
</html>
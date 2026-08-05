<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL Insert Data</title>
</head>
<body>
    <?php
        $conn = mysqli_connect("localhost", "root", "", "users");

        $sql = "INSERT INTO users (name,email,password)
        VALUES('Paias', 'paias@gmail.com', '0000')"; 

        if (mysqli_query($conn, $sql))
            {
                echo "Record Inserted";
            }
            else
            {
                echo "Error";
            }
    ?>
</body>
</html>
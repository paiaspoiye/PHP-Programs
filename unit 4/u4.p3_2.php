<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDO Insert Data</title>
</head>
<body>
    <?php
       $conn = new PDO("mysql:host=localhost;dbname=users","root"."");
       
       $sql = "INSERT INTO users (name,email,password)
       VALUES('Paias','paias@gmail.com','0000')";

       $conn->exec($sql);

       echo "Record Inserted Successfully";

    ?>
</body>
</html>
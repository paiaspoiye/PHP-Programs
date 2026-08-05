<!DOCTYPE html>
<html lang="en">
<head>
    <title>PDO table</title>
</head>
<body>
    <?php
    try{
        $conn = new PDO("mysql:host=localhost;dbname=users","root", "");
        $conn->exec("CREATE TABLE practical (
        id INT AUTO_INCREMENT PRIMARY  KEY,
        name VARCHAR (100),
        email VARCHAR (100),
        password VARCHAR (100)
        )");

        ECHO "  TABLE CREATED  SUCCESSFULLY";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database Connection</title>
</head>
<body>
    <?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Database Connected Successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    ?>
</body>
</html>
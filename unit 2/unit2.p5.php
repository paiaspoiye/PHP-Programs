<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 5 Unit 2</title>
</head>
<body>
    <h3>Type Casting in PHP</h3>
    <?php
    
        $value = "100";
        
        echo"Original Value: " . $value . "<br>";
        echo "Original Type: " . gettype($value) . "<br><br>";

        settype($value, "integer");

        echo "After Type Casting: <br>";
        echo "Value: " . $value . "<br>";
        echo "Type: " . gettype($value);

    ?>
    
</body>
</html>
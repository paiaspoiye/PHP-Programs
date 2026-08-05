<!DOCTYPE html>
<html lang="en">
<head>
    <title>Array Printed by User</title>
</head>
<body>
    <h3>Array for Fruits:</h3>
    <?php
        $fruits = array ("Apple", "Banana", "Cherry", "DragonFruit");

        foreach($fruits as $fruits)
            {
                echo $fruits . "<br>";
            }
    ?>
    <h3>Array for Animals:</h3>
    <?php
        $animals = array ("Lion", "Tiger", "Python", "Snake");

        foreach($animals as $animals)
            {
                echo $animals . "<br>";
            }
    ?>
</body>
</html>
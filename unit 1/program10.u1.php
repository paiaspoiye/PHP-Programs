<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 10</title>
</head>
<body>
    <h3>Merge two Arrays</h3>
    <?php
        $array1 = array("Apple", "Banana", "Carrot");
        $array2 = array ("Ant", "Bandicut", "Cat");

        $mergedArray = array_merge ($array1, $array2);

        echo "Merged Array: <br>";

        foreach ($mergedArray as $values)
            {
                echo $values . "<br>";
            }
    ?>
    
</body>
</html>
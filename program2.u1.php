<!DOCTYPE html>
<html lang="en">
<head>
    <h3>Program 2 Unit 1</h3>
</head>
<body>
    <form method="post">
        A: <input type="number" name="a"> <br><br>
        B: <input type="number" name="b"> <br><br>
        <input type="submit" value="Find">
</form>
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    if ($a > $b)
        {
            echo "maximum number = $a <br>";
            echo "minimum number = $b";
        }
    else
        {
            echo "maximum number = $b <br>";
            echo "minimum number = $a";
        }
    ?>
</body>
</html>
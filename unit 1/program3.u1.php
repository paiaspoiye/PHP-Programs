<!DOCTYPE html>
<html lang="en">

<body>
    <form method = "post">
    A: <input type = "number" name = "a"> <br><br>
    B: <input type = "number" name = "b"> <br><br>
    <input type = "submit" value = "find">
</form>
<br>
<br>
<?php

$a = $_POST['a'];
$b = $_POST['b'];

echo "Addition = " . ($a + $b). "<br>";
echo "Subtraction = " . ($a - $b). "<br>";
echo "Multiplication = " . ($a * $b). "<br>";
echo "Division = " . ($a / $b) . "<br>";
?>    
</body>
</html>
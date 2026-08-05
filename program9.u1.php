<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter values separated by commas:
    <input type="text" name="values">
    <input type="submit" value="Reverse">
</form>

<?php
if(isset($_POST['values']))
{
    $arr = explode(",", $_POST['values']);
    $reverse = array_reverse($arr);

    echo "<h3>Reversed Array:</h3>";
    foreach($reverse as $value)
    {
        echo trim($value) . "<br>";
    }
}
?>

</body>
</html>
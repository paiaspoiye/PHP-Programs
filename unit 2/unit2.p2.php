<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method = "post">
        enter number (separated by commas): <br><br>
        <input type = "text" name = "numbers">
        <br><br>
        <input type = "submit" value = "sort">
</form>
    <?php
        if(isset($_POST['numbers']))
            {
                $numbers = explode(",", $_POST['numbers']);
                sort($numbers);
                echo "<h3> Sorted Array: </h3>";

                foreach($numbers as $num)
                    {
                        echo $num . "<br>";
                    }
            }
    ?>
</body>
</html>
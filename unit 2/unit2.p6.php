<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 6 Unit 2</title>
</head>
<h3>User Define Function (Calculator)</h3>
<body>
    <form method="POST">
        number 1:
        <input type = "number" name = "num1"><br><br>

        number 2:
        <input type = "number" name = "num2"><br><br>

        <input type = "submit" name = "add" value = "add">
        <input type = "submit" name = "sub" value = "subtract">
        <input type = "submit" name = "mul" value = "multiply">
        <input type = "submit" name = "div" value = "divide">
</form>
<br><br>

    <?php
        function calculator($a, $b, $op)
        {
            switch($op)
            {
                case "add": return $a + $b;
                case "sub": return $a - $b;
                case "mul": return $a * $b;
                case "div":
                    if ($b != 0)
                        return $a / $b;
                    else
                        return "Divison by zero not allowed ";

            }
        }
        if ($_POST)
            {
                $a = $_POST['num1'];
                $b = $_POST['num2'];
            
                if(isset($_POST['add']))
                    echo "Result = " . calculator($a,$b,"add");

                if(isset($_POST['sub']))
                    echo "Result = " . calculator($a,$b,"sub");

                if(isset($_POST['mul']))
                    echo "Ressult = " . calculator($a,$b,"mul");

                if(isset($_POST['div']))
                    echo "Result = " . calculator($a,$b,"div");


            }
    ?>
    
</body>
</html>
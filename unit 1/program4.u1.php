<!DOCTYPE html>
<html lang="en">
<head>
    <h3> Current Month using IF ELSE and SWITCH</h3>
</head>
<body>
    <?php
        $month = date("n");

        if ($month == 1)
            echo "January";
        else if ($month == 2)
            echo "February";
        else
            echo "Other Month";

        echo "<br>";

        switch($month)
        {
            case 1 : echo "January"; break;
            case 2 : echo "February"; break;
            case 3 : echo "Other Month"; break;
        }
    ?>
    
</body>
</html>
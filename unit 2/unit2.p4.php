<!DOCTYPE html>
<html lang="en">
<head>
    <title>String Function</title>
</head>
<body>
    <h3>Program2.4_1 strlen</h3>
    <?php
        $str = "welcome to php";

        echo "string = $str <br>";
        echo "length = " . strlen($str);

    ?>
    <h3>Program2.4_2 strpos</h3>
    <?php
        $str = "welcome to PHP programming";

        echo "Position of PHP = " . strpos($str, "PHP");

    ?>
    <h3>Program2.4_3 str_word_count</h3>
    <?php
        $str = "welcome to php programming";

        echo "number of words = " . str_word_count($str);

    ?>
    <h3>Program2.4_4 strrev</h3>
    <?php
        $str = "hello ";

        echo "Original String = $str <br>";
        echo "Reversed String = " . strrev($str);

    ?>
    <h3>Program2.4_5 str_replace</h3>
    <?php
        $str = "i love java";

        echo str_replace("java", "PHP", $str);

    ?>
    <h3>Program2.4_6 str_to_lower</h3>
    <?php
        $str = "WELCOME TO PHP";

        echo strtolower($str);
    ?>
    <h3>Program2.4_7 str_to_upper</h3>
    <?php
        $str = "welcome to php";

        echo strtoupper($str);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Program 2.3_1: array_change_keycase</h3>
        <?php
            $array = array(
                "name" => "Paias",
                "Age" => 20,
                "city" => "PNG"
            );

            echo "<b> Original Array </b> <br>";
            print_r($array);

            echo "<br> <b> lowercase keys </b> <br>";
            print_r(array_change_key_case($array, CASE_LOWER));

            echo "<br> <b> uppercase keys </b> <br>";
            print_r(array_change_key_case($array, CASE_UPPER));
           echo "<br><br>"
        ?>
         <h3>Program 2.3_2: array_chunk</h3>
         <?php
            $colors = array("red", "red", "green", "red", "blue", "yellow");
            $result = array_count_values($colors);

            echo "<pre>";
            print_r($result);
            echo "</pre>";
         ?>
         <h3> Program 2.3_3: array_count_values </h3>
         <?php
            $colors = array("red","blue","green","red","blue","green");

            echo "<prev>";
            print_r(array_count_values($colors));
            echo"<prev>";
         ?>
         <h3> Program 2.3_4:array_combine </h3>
         <?php
            $keys = array("name", "city","course");
            $values = array("Paias", "PNG", "BSC.IT");

            $result = array_combine($keys, $values);

            echo "<prev>";
            print_r($result);
            echo "<prev>";
         ?>
         <h3> Program 2.3_5: array_pop </h3>
         <?php
            $fruit = array("Apple","Banana","Mango","Orange");

            array_pop($fruit);

            echo "<prev>";
            print_r($fruit);
            echo"<prev>";

         ?>
         <h3>Program 2.3_6: array_push </h3>
         <?php
            $fruit = array("apple","banana","mango");

            array_push($fruit, "orange", "grapes");

            echo "<prev>";
            print_r($fruit);
            echo"</prev>";
         ?>
         <h3> Program 2.3_7: array_unshift </h3>
         <?php
            echo "<pre>";
            print_r($fruit);
            echo"</prev>";
         ?>
         <h3>Program 2.3_8: array_shift </h3>
         <?php
            echo "<pre>";
            print_r($fruit);
            echo"</pre>";
         ?>
</body>
</html>
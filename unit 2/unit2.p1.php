<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unit 2 Program 1</title>
</head>

<body>
    <?php
        //1. Numeric Array (Monday to Saturday)
        $days = array ("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

        echo "<h3> Numeric Array (Days) </h3>";
        foreach($days as $day) 
            {
                echo $day. "<br>";
            }
        // 2. Associative Array (Months with Total Days)
        $months = array (
            "January" => 31,
            "February" => 28,
            "March" => 31,
            "April" => 30,
            "May" => 31,
            "June" => 30,
            "July" => 31,
            "August" => 31,
            "September" => 30,
            "October" => 31,
            "November" => 30,
            "December" => 31
        );

        echo "<h3> Associative Array (Months and Days)</h3>";
        foreach($months as $month => $days)
            {
                echo $month . " = " . $days . "days<br>";
            }

        // 3. Multidimentional Array (Laptop Details)
        $laptops = array (
            array(
                "company" => "Del",
                "model" => "inspiration 15",
                "price" => 65000
            ),
            array (
                "company" => "hp",
                "model" => "pavilion 14",
                "price" => 70000
            ),
            array (
                "company" => "MacOS",
                "model" => "Apple",
                "price" =>  120000
            )
        );
        echo "<h3> Multidimensional Array (Laptop Details: )</h3>";
        foreach($laptops as $laptop)
            {
                echo "Comapany: ". $laptop["company"]. "<br>";
                echo "Model: ". $laptop["model"]. "<br>";
                echo "Price: ". $laptop["price"]. "<br>", "<br>";
            }
    ?>
</body>
</html>
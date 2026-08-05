<!DOCTYPE html>
<html>
<body>
    <h3>Program 1 Unit 1</h3>
    <?php
        $name = "Paias";
       $marks = 450;
        define('Total', 500);

        $percentage = ($marks / Total) * 100;

        echo "<h2>Previous Semester Result</h2>";
        echo "Name: $name <br>";
        echo "Marks: $marks / ".Total."<br>";
        echo "Percentage: $percentage%";
    ?>
    
</body>
</html>
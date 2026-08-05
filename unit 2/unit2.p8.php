<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 8 Unit 2</title>
</head>
<body>
    <?php

echo "<h2>PHP Date and Time Functions</h2>";

// 1. DAYOFWEEK()
echo "1. Day of Week (1=Sunday, 7=Saturday): " . date("w") + 1 . "<br><br>";

// 2. WEEKDAY()
echo "2. Weekday (0=Monday, 6=Sunday): " . date("N") - 1 . "<br><br>";

// 3. DAYOFMONTH()
echo "3. Day of Month: " . date("d") . "<br><br>";

// 4. DAYOFYEAR()
echo "4. Day of Year: " . date("z") + 1 . "<br><br>";

// 5. DAYNAME()
echo "5. Day Name: " . date("l") . "<br><br>";

// 6. MONTH() and MONTHNAME()
echo "6. Month Number: " . date("m") . "<br>";
echo "   Month Name: " . date("F") . "<br><br>";

// 7. WEEK() and NOW()
echo "7. Week Number: " . date("W") . "<br>";
echo "   Current Date & Time: " . date("Y-m-d H:i:s") . "<br><br>";

// 8. SYSDATE() / CURRENT_TIMESTAMP()
echo "8. System Date & Time: " . date("Y-m-d H:i:s") . "<br>";

?>
</body>
</html>
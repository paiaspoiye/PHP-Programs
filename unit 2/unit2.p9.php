<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 9 Unit 2</title>
</head>
<body>
    <?php

echo "<h2>PHP Date and Time Functions</h2>";

// 1. HOUR()
echo "1. Hour: " . date("H") . "<br><br>";

// 2. MINUTE()
echo "2. Minute: " . date("i") . "<br><br>";

// 3. SECOND()
echo "3. Second: " . date("s") . "<br><br>";

// 4. DATE_FORMAT()
echo "4. Formatted Date: " . date("d-m-Y H:i:s") . "<br><br>";

// 5. DATE_SUB()
echo "5. Date After Subtracting 7 Days: " . date("Y-m-d", strtotime("-7 days")) . "<br><br>";

// 6. DATE_ADD()
echo "6. Date After Adding 7 Days: " . date("Y-m-d", strtotime("+7 days")) . "<br>";

?>
</body>
</html>
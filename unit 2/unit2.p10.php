<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 10 Unit 2</title>
</head>
<body>
    <?php

echo "<h2>PHP Date and Time Functions</h2>";

// 1. CURDATE() / CURRENT_DATE()
echo "1. Current Date: " . date("Y-m-d") . "<br><br>";

// 2. CURTIME() / CURRENT_TIME()
echo "2. Current Time: " . date("H:i:s") . "<br><br>";

// 3. UNIX_TIMESTAMP()
echo "3. Unix Timestamp: " . time() . "<br><br>";

// 4. FROM_UNIXTIME()
echo "4. Converted Unix Time: " . date("Y-m-d H:i:s", time()) . "<br>";

?>
</body>
</html>
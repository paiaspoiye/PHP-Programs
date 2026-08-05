<!DOCTYPE html>
<html lang="en">
<head>
    <title>Program 7 Unit 2</title>
</head>
<body>
    
    <?php

$str1 = "Hello";
$str2 = "World";
$str3 = "   PHP Programming   ";

echo "<h2>PHP String Functions</h2>";

// 1. strlen()
echo "1. Length: " . strlen($str1) . "<br><br>";

// 2. concat() using .
echo "2. Concat: " . $str1 . " " . $str2 . "<br><br>";

// 3. concat_ws() equivalent using implode()
$arr = array("2026", "07", "30");
echo "3. Concat_WS: " . implode("-", $arr) . "<br><br>";

// 4. trim(), rtrim(), ltrim()
echo "4. Trim: '" . trim($str3) . "'<br>";
echo "   LTrim: '" . ltrim($str3) . "'<br>";
echo "   RTrim: '" . rtrim($str3) . "'<br><br>";

// 5. str_pad(), strpos()
echo "5. Left Pad: " . str_pad($str1, 10, "*", STR_PAD_LEFT) . "<br>";
echo "   Right Pad: " . str_pad($str1, 10, "*", STR_PAD_RIGHT) . "<br>";
echo "   Locate 'World': " . strpos("Hello World", "World") . "<br><br>";

// 6. strstr(), substr()
echo "6. strstr(): " . strstr("Hello World", "World") . "<br>";
echo "   substr(): " . substr("Hello World", 6, 5) . "<br><br>";

// 7. strtolower(), strtoupper()
echo "7. Lowercase: " . strtolower("PHP PROGRAMMING") . "<br>";
echo "   Uppercase: " . strtoupper("php programming") . "<br><br>";

// 8. str_repeat(), str_replace()
echo "8. Repeat: " . str_repeat("PHP ", 3) . "<br>";
echo "   Replace: " . str_replace("PHP", "MySQL", "I Love PHP") . "<br>";

?>

</body>
</html>
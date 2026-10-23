<?php
echo "<h2>Basic PHP Script</h2>";
echo "PHP version: " . phpversion() . "<br>";
$name = "Asha"; $age = 20; $cgpa = 8.45; $passed = true;
define("COLLEGE", "CSVTU Bhilai");
echo "Name: $name<br>Age: $age<br>CGPA: $cgpa<br>";
echo "Passed: " . ($passed ? "Yes" : "No") . "<br>College: " . COLLEGE . "<br>";
echo "Type of \$cgpa: " . gettype($cgpa) . "<br>"; var_dump($age); echo "<br>";
$a = 17; $b = 5; echo "<h3>Operators</h3>";
echo "$a + $b = " . ($a + $b) . "<br>$a % $b = " . ($a % $b) . "<br>$a ** 2 = " . ($a ** 2) . "<br>";
echo "Spaceship (a <=> b): " . ($a <=> $b) . "<br>";
$text = "Web Technology Lab"; echo "<h3>String functions</h3>";
echo strlen($text) . " | " . strtoupper($text) . " | " . strrev($text) . "<br>";
echo str_replace("Lab", "Practical", $text) . " | " . substr($text, 0, 3) . "<br>";
echo "<h3>Date</h3>Today is " . date("d-m-Y, l") . "<br>";
?>

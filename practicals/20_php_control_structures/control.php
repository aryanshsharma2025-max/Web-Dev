<?php
echo "<h2>Control Statements, Loops, Arrays and Functions</h2>";
$marks = 68; if ($marks >= 75) echo "Grade A<br>"; elseif ($marks >= 60) echo "Grade B<br>"; else echo "Grade C<br>";
$day = date("N"); switch ($day) { case 6: case 7: echo "Weekend<br>"; break; default: echo "Weekday<br>"; }
echo "<h3>Loops</h3>"; for ($i = 1; $i <= 5; $i++) echo $i . " "; echo "<br>";
$n = 1; while ($n <= 5) { echo $n * $n . " "; $n++; } echo "<br>";
$k = 10; do { echo $k . " "; $k -= 3; } while ($k > 0); echo "<br>";
echo "<h3>Arrays</h3>"; $fruits = ["Apple", "Banana", "Cherry"]; $fruits[] = "Mango";
echo "Count: " . count($fruits) . "<br>"; foreach ($fruits as $index => $f) echo "$index : $f<br>";
$student = ["name" => "Asha", "roll" => 1, "branch" => "CSE"]; foreach ($student as $key => $value) echo "$key = $value<br>";
$matrix = [[1, 2, 3], [4, 5, 6]]; echo "matrix[1][2] = " . $matrix[1][2] . "<br>";
$nums = [5, 2, 9, 1]; sort($nums); echo "Sorted: " . implode(", ", $nums) . "<br>"; echo "Max: " . max($nums) . ", Sum: " . array_sum($nums) . "<br>"; echo "In array? " . (in_array(9, $nums) ? "Yes" : "No") . "<br>";
function add($x, $y = 10) { return $x + $y; } function factorial($n) { return $n <= 1 ? 1 : $n * factorial($n - 1); } function swap(&$p, &$q) { $t = $p; $p = $q; $q = $t; }
echo "<h3>Functions</h3>add(5) = " . add(5) . ", add(5, 7) = " . add(5, 7) . "<br>factorial(5) = " . factorial(5) . "<br>"; $p = 1; $q = 2; swap($p, $q); echo "After swap: p = $p, q = $q<br>";
?>

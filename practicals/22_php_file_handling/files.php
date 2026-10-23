<?php
echo "<h2>PHP File Handling</h2><pre>"; $file = "students.txt";
$fp = fopen($file, "w") or die("Cannot open file"); fwrite($fp, "Asha,CSE,85\n"); fwrite($fp, "Bharat,ECE,72\n"); fclose($fp); echo "File written.\n";
$fp = fopen($file, "a"); fwrite($fp, "Chitra,ME,91\n"); fclose($fp); echo "Record appended.\n";
echo "\n--- readfile / file_get_contents ---\n" . file_get_contents($file); echo "\n--- line by line ---\n";
$fp = fopen($file, "r"); while (!feof($fp)) { $line = fgets($fp); if (trim($line) == "") continue; list($name, $branch, $marks) = explode(",", trim($line)); echo "Name: $name | Branch: $branch | Marks: $marks\n"; } fclose($fp);
echo "\nExists   : " . (file_exists($file) ? "Yes" : "No") . "\nSize     : " . filesize($file) . " bytes\nLines    : " . count(file($file)) . "\nReadable : " . (is_readable($file) ? "Yes" : "No") . "\n";
copy($file, "backup.txt"); rename("backup.txt", "students_backup.txt"); echo "\nBackup created: " . (file_exists("students_backup.txt") ? "Yes" : "No") . "\n"; unlink("students_backup.txt"); echo "Backup deleted : " . (!file_exists("students_backup.txt") ? "Yes" : "No") . "\n</pre>";
?>

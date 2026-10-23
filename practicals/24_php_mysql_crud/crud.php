
<?php
$host="localhost";
$user="root";
$pass="";
$db="college";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try  {
    $conn = new mysqli($host, $user, $pass, $db);
}
catch (mysqli_sql_exception $e)  {
    die("Connection failed: " . $e->getMessage());
}
echo "<h2>PHP - MySQL Database Operations</h2>Connected successfully<br>";
$name="Esha";
$email="esha" . rand(100,999) . "@example.com";
$branch="CSE";
$marks=79.5;
$stmt=$conn->prepare("INSERT INTO students (name,email,branch,marks) VALUES (?,?,?,?)");
$stmt->bind_param("sssd",$name,$email,$branch,$marks);
$stmt->execute();
$newId=$conn->insert_id;
echo "Record inserted, roll no = $newId<br>";
$newMarks=83.0;
$stmt=$conn->prepare("UPDATE students SET marks=? WHERE roll_no=?");
$stmt->bind_param("di",$newMarks,$newId);
$stmt->execute();
echo "Records updated: " . $stmt->affected_rows . "<br>";
$result=$conn->query("SELECT roll_no,name,email,branch,marks FROM students ORDER BY roll_no");
echo "<table border='1' cellpadding='6' cellspacing='0'><tr><th>Roll No</th><th>Name</th><th>Email</th><th>Branch</th><th>Marks</th></tr>";
while($row=$result->fetch_assoc()) echo "<tr><td>{$row['roll_no']}</td><td>" . htmlspecialchars($row['name']) . "</td><td>" . htmlspecialchars($row['email']) . "</td><td>{$row['branch']}</td><td>{$row['marks']}</td></tr>";
echo "</table>Total records: " . $result->num_rows . "<br>";
$stmt=$conn->prepare("DELETE FROM students WHERE roll_no=?");
$stmt->bind_param("i",$newId);
$stmt->execute();
echo "Records deleted: " . $stmt->affected_rows . "<br>";
$conn->close();
?>

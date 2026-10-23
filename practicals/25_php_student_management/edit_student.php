
<?php
require "db.php";
require_login();
$roll=(int)($_GET["roll"]??$_POST["roll"]??0);
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $name=trim($_POST["name"]);
    $email=trim($_POST["email"]);
    $branch=$_POST["branch"];
    $marks=(float)$_POST["marks"];
    $stmt=$conn->prepare("UPDATE students SET name=?,email=?,branch=?,marks=? WHERE roll_no=?");
    $stmt->bind_param("sssdi",$name,$email,$branch,$marks,$roll);
    $stmt->execute();
    header("Location: dashboard.php");
    exit();
}
$stmt=$conn->prepare("SELECT * FROM students WHERE roll_no=?");
$stmt->bind_param("i",$roll);
$stmt->execute();
$s=$stmt->get_result()->fetch_assoc();
if (!$s) die("Student not found");
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Student</title>
    </head>
    <body>
        <h2>Edit Student (Roll No
<?php echo $roll;
?>)</h2>
<form method="post">
    <input type="hidden" name="roll" value="
<?php echo $roll;
?>">
<p>Name: <input type="text" name="name" value="
<?php echo htmlspecialchars($s['name']);
?>" required>
</p>
<p>Email: <input type="email" name="email" value="
<?php echo htmlspecialchars($s['email']);
?>" required>
</p>
<p>Branch: <select name="branch">
<?php foreach(["CSE","ECE","ME"] as $b) echo "<option".($b==$s["branch"]?" selected":"").">$b</option>";
?></select>
</p>
<p>Marks: <input type="number" name="marks" step="0.01" min="0" max="100" value="
<?php echo $s['marks'];
?>" required>
</p>
<input type="submit" value="Update">
<a href="dashboard.php">Cancel</a>
</form>
</body>
</html>

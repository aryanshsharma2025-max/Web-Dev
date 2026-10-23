
<?php
require "db.php";
require_login();
$search=trim($_GET["q"]??"");
$like="%".$search."%";
$stmt=$conn->prepare("SELECT * FROM students WHERE name LIKE ? OR branch LIKE ? ORDER BY roll_no");
$stmt->bind_param("ss",$like,$like);
$stmt->execute();
$result=$stmt->get_result();
$stats=$conn->query("SELECT COUNT(*) AS total, AVG(marks) AS avg FROM students")->fetch_assoc();
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Management System</title>
        <style>
            body {
                font-family:Arial,sans-serif;
                margin:20px
            }
            table {
                border-collapse:collapse;
                width:100%;
                margin-top:10px
            }
            th,td {
                border:1px solid #999;
                padding:8px;
                text-align:left
            }
            th {
                background:#1f4e79;
                color:#fff
            }
            a.btn {
                padding:4px 10px;
                color:#fff;
                text-decoration:none;
                border-radius:4px
            }
            .add {
                background:#27ae60
            }
            .edit {
                background:#2980b9
            }
            .del {
                background:#c0392b
            }
        </style>
    </head>
    <body>
        <h2>Student Management System</h2>
        <p>Welcome, <b>
<?php echo htmlspecialchars($_SESSION["user"]);
?></b> | <a href="logout.php">Logout</a>
</p>
<p>Total students: <b>
<?php echo $stats["total"];
?></b> | Average marks: <b>
<?php echo round($stats["avg"],2);
?></b>
</p>
<form method="get">
    <input type="text" name="q" placeholder="Search by name or branch" value="
<?php echo htmlspecialchars($search);
?>">
<input type="submit" value="Search">
<a class="btn add" href="add_student.php">+ Add Student</a>
</form>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Branch</th>
        <th>Marks</th>
        <th>Action</th>
    </tr>
<?php while($r=$result->fetch_assoc()) {
    ?><tr>
    <td>
<?php echo $r["roll_no"];
?></td>
<td>
<?php echo htmlspecialchars($r["name"]);
?></td>
<td>
<?php echo htmlspecialchars($r["email"]);
?></td>
<td>
<?php echo htmlspecialchars($r["branch"]);
?></td>
<td>
<?php echo $r["marks"];
?></td>
<td>
    <a class="btn edit" href="edit_student.php?roll=
<?php echo $r['roll_no'];
?>">Edit</a>
<a class="btn del" href="delete_student.php?roll=
<?php echo $r['roll_no'];
?>" onclick="return confirm('Delete this student?')">Delete</a>
</td>
</tr>
<?php
}
?></table>
</body>
</html>

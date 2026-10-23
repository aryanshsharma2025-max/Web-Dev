<?php
require "db.php"; require_login(); $roll=(int)($_GET["roll"]??0); $stmt=$conn->prepare("DELETE FROM students WHERE roll_no=?"); $stmt->bind_param("i",$roll); $stmt->execute(); header("Location: dashboard.php"); exit();
?>

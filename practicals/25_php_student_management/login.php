
<?php
require "db.php";
$error="";
if (isset($_SESSION["user"]))  {
    header("Location: dashboard.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $username=trim($_POST["username"]);
    $password=$_POST["password"];
    $stmt=$conn->prepare("SELECT password FROM users WHERE username=?");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $row=$stmt->get_result()->fetch_assoc();
    if ($row && password_verify($password,$row["password"]))  {
        session_regenerate_id(true);
        $_SESSION["user"]=$username;
        if (isset($_POST["remember"])) setcookie("remember_user",$username,time()+7*24*60*60,"/");
        else setcookie("remember_user","",time()-3600,"/");
        header("Location: dashboard.php");
        exit();
    }
    $error="Invalid username or password";
}
$saved=$_COOKIE["remember_user"]??"";
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <style>
            body {
                font-family:Arial,sans-serif;
                background:#eef2f7
            }
            .box {
                width:300px;
                margin:80px auto;
                padding:25px;
                background:#fff;
                border-radius:8px;
                box-shadow:0 0 10px #aaa
            }
            input[type=text],input[type=password] {
                width:100%;
                padding:8px;
                margin:6px 0 12px;
                box-sizing:border-box
            }
            input[type=submit] {
                width:100%;
                padding:9px;
                background:#1f4e79;
                color:#fff;
                border:none
            }
            .err {
                color:red
            }
        </style>
    </head>
    <body>
        <div class="box">
            <h2>Student Management Login</h2>
<?php if($error) echo "<p class='err'>$error</p>";
?><form method="post">Username<input type="text" name="username" value="
<?php echo htmlspecialchars($saved);
?>" required>Password<input type="password" name="password" required>
<p>
    <input type="checkbox" name="remember"
<?php if($saved) echo "checked";
?>> Remember me</p>
<input type="submit" value="Login">
</form>
</div>
</body>
</html>

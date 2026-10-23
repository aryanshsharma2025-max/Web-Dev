
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try  {
    $conn = new mysqli("localhost", "root", "", "college");
}
catch (mysqli_sql_exception $e)  {
    die("Database connection failed: " . $e->getMessage());
}
session_start();
function require_login()  {
    if (!isset($_SESSION["user"]))  {
        header("Location: login.php");
        exit();
    }
}
?>

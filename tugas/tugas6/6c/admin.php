<?php
if (isset($_POST["save"])) {
    if ($_POST["ussername"] == "admin" && $_POST["password"] == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        header("location: login.php?error=Ussername/Password%20Salah");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <a href="login.php">Loguot</a>
</body>
</html>
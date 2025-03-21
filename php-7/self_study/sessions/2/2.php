<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    header("Location: welcome.php");
    exit();
}
?>
<form method="post">
    <input type="text" name="username" placeholder="Имя пользователя">
    <input type="password" name="password" placeholder="Пароль">
    <input type="submit" value="Войти">
</form>

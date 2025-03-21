<?php
session_start();
$_SESSION["username"] = "student";
if(isset($_SESSION["username"])) {
    echo "Имя пользователя: " . $_SESSION["username"];
}

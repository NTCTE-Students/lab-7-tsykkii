<?php
// Папка: self_study/sessions/3/welcome.php
session_start();
if(isset($_SESSION["username"])) {
    echo "Добро пожаловать, " . $_SESSION["username"] . "!<br>";
    echo '<a href="logout.php">Выйти</a>';
} else {
    echo "Пожалуйста, войдите.";
}

// Папка: self_study/sessions/3/logout.php
session_start();
session_destroy();
header("Location: index.php");

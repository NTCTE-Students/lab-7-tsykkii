<?php
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
if (isset($_GET["add"])) {
    $_SESSION["cart"][] = $_GET["add"];
}
if (isset($_GET["remove"])) {
    unset($_SESSION["cart"][array_search($_GET["remove"], $_SESSION["cart"])]);
}
echo "Ваша корзина: " . (empty($_SESSION["cart"]) ? "пустая" : implode(", ", $_SESSION["cart"]));
?>
<a href="?add=товар1">Добавить товар1</a>
<a href="?remove=товар1">Удалить товар1</a>

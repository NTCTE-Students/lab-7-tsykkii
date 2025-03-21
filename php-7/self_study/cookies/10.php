<?php
$cookie_name = 'items_in_cart';
$cookie_value = '5';

setcookie($cookie_name, $cookie_value, time() + (3600), '/');
?>
<!DOCTYPE html>
<html>
  <body>
    <?php
      if (!isset($_COOKIE[$cookie_name])) {
          print("Куки '{$cookie_name}' не установлены!");
      } else {
          print("Куки '{$cookie_name}' установлены!<br>");
          print('Значение: ' . $_COOKIE[$cookie_name]);
      }
    ?>
  </body>
</html>

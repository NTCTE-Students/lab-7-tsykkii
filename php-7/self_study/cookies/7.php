<?php
$cookie_name = 'last_visit';
$cookie_value = date('Y-m-d H:i:s');

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

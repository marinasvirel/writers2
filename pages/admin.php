<?php
if (!array_key_exists('login', $_SESSION)) {
  echo "нет прав <a href='index.php'>Вернуться на главную</a>";
  exit();
}
?>

admin
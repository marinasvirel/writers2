<?php
session_start();

if (!array_key_exists('login', $_SESSION)) {
  echo "нет прав <a href='index.php'>Вернуться на главную</a>";
  exit();
}
?>

<!DOCTYPE html>
<html lang="ru">

<?php require_once "elems/head.php" ?>

<body>
  <?php require_once "elems/header.php"; ?>
  <main>
    <div class="container">
      {{content}}
    </div>
  </main>
  <?php require_once "elems/footer.php"; ?>
</body>

</html>
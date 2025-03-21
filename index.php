<?php
session_start();
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
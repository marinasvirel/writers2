<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo  $desc ?? 'Биографии писателей' ?>">
  <title><?php echo  $title ?? "Биографии писателей" ?></title>
  <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="auth-box">
        <?php
        if (array_key_exists('login', $_SESSION)) {
          if ($_SESSION['login'] == "admin") {
            require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/exit-form.php";
            echo "<a href=\"?page=admin\">Админка</a>";
          }
        } else {
          require_once $_SERVER['DOCUMENT_ROOT'] . "/forms/log-form.php";
        }
        ?>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
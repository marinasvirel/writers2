<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo  $desc ?? 'Биографии писателей' ?>">
  <title><?php echo  $title ?? "Биографии писателей" ?></title>
</head>

<body>
  <header>
    <div class="container">
      <div class="auth-box">
        <?php
        if (array_key_exists('login', $_SESSION)) {
          if ($_SESSION['login'] == "admin") {
            require_once "forms/exit-form.php";
          }
        } else {
          require_once "forms/log-form.php";
        }
        ?>
      </div>
    </div>
  </header>
  <main>
    <div class="container">
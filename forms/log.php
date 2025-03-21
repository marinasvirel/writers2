<?php

if (isset($_POST['log'])) {
  $login = $_POST['login'];
  $password = $_POST['password'];
  if ($login == "admin" && $password == "root") {
    session_start();
    $_SESSION['login'] = $login;
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
  } else {
    echo "Не правильно заполнена форма <a href=\"{$_SERVER['HTTP_REFERER']}\">Вернуться к заполнению</a>";
  }
}

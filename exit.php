<?php

if (isset($_POST['exit'])) {
  session_start();
  unset($_SESSION['login']);
  header("Location: " . $_SERVER['HTTP_REFERER']);
  exit();
}

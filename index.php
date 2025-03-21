<?php
session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$path = "pages/$page.php";

require_once "elems/header.php";
if (file_exists($path)) {
  require_once $path;
} else {
  echo "нет такой страницы";
}
require_once "elems/footer.php";

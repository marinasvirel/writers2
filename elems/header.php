<header>
  <div class="container">
    <div class="auth-box">
      <?php
      if (array_key_exists('login', $_SESSION)) {
        if ($_SESSION['login'] == "admin") {
          require_once "exit-form.php";
        }
      } else {
        require_once "log-form.php";
      }
      ?>
    </div>
  </div>
</header>
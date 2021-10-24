<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <img class="mb-2" src="Documents/img/logo.png" alt="" width="35" height="25">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <?php
      $uri_current = $_SERVER[REQUEST_URI];
      $main_page = "/index.php";
      $authorization_page = "/authorization.php";
      $register_page = "/register.php";
      switch ($uri_current) {
        case $main_page:
          echo '<a class="nav-link active" aria-current="page" href="index.php">Главная</a>';
          echo '<a class="nav-link" href="register.php">Регистрация</a>';
          echo '<a class="nav-link" href="authorization.php">Авторизация</a>';
          break;
          case $authorization_page:
            echo '<a class="nav-link" aria-current="page" href="index.php">Главная</a>';
            echo '<a class="nav-link" href="register.php">Регистрация</a>';
            echo '<a class="nav-link active" href="authorization.php">Авторизация</a>';
            break;
          case $register_page:
            echo '<a class="nav-link" aria-current="page" href="index.php">Главная</a>';
            echo '<a class="nav-link active" href="register.php">Регистрация</a>';
            echo '<a class="nav-link" href="authorization.php">Авторизация</a>';
            break;
        default:
          echo "n";
          break;
}
      ?>
    </div>
  </div>
</div>
</nav>
<header class="bg-dark py-5">
<div class="container px-4 px-lg-5 my-5">
    <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">VseConcerty</h1>
        <p class="lead fw-normal text-white-50 mb-0">Лучшее концертное агенство!</p>
    </div>
</div>
</header>

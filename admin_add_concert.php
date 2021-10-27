<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js">
    <?php require "navbar.php"?>
  </head>
  <body class="text-center">
    <div align="center" class="mt-5">
    <form class="form-signin" method="POST">
      <h1 class="h3 mb-3 font-weight-normal ">Добавьте концерт</h1>
      <input type="text" class="form-control mb-3" name="name" placeholder="Название концерта" required>
      <input type="text" class="form-control mb-3" name="description" placeholder="Описание" required>
      <input type="text" class="form-control mb-3" name="count_tickets" placeholder="Количество билетов" required>
      <input type="text" class="form-control mb-3" name="datatime" placeholder="Дата время" required>
      <input type="text" class="form-control mb-3" name="location" placeholder="Место проведения" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Добавить</button>
      <p class="mt-5 mb-3 text-muted">&copy; Tickets 2021</p>
    </form>
    <script>
    window.onload = function() {
        history.replaceState("", "", "admin_add_concert.php");
    }
    </script>
    </div>
    <?php require "add_concert.php"; ?>
  </body>
</html>

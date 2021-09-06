<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="form-signin">
  <form action="../core/sign_up.php" method="POST">
    <h1 class="h3 mb-3 fw-normal text-center">Создать нового пользователя</h1>

    <div class="form-floating">
      <label for="floatingInput">Имя</label>
      <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Имя">
    </div>
    <div class="form-floating">
      <label for="floatingPassword">Пароль</label>
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Пароль">
    </div>
    <div class="form-floating mt-3">
      <select class="form-select" name='acess' aria-label="Default select example">
        <option selected>Выберите уровень доступа</option>
        <?php
          $quantity_of_types = $_SESSION["data"]["quantity_of_types"];
          for($i = 0; $i < $quantity_of_types; $i++){
              $acces = $_SESSION["data"]["type_of_acc"][$i]["acces"];
              echo "<option value='$acces'>$acces</option>";
          }
        ?>
      </select>
    </div>

    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Создать</button>

  </form>
</main>

<script src="../js/bootstrap.min.js"></script>
</body>
</html>
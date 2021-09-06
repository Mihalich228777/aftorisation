<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<main class="form-signin" >
  <form id="sign_in_form">
    <h1 class="h3 mb-3 fw-normal text-center">Зайдите а аккаунт</h1>
    <div class="form-floating mt-2">
      <label for="floatingInput">Имя</label>
      <input type="text" class="form-control" value="" name="name" id="floatingInput" placeholder="Имя">
      <p class="alert_text_name">Вы не ввели имя</p>
    </div>
    <div class="form-floating">
      <label for="floatingPassword">Пароль</label>
      <input type="password" class="form-control" value="" name="password" id="floatingPassword" placeholder="пароль">
      <p class="alert_text_pass">Вы не ввели пароль</p>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-2 btn_sub_1" id="" type="button">Зайти</button>

  </form>
</main>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/aftorisation.js"></script>
</body>
</html>




<?php
require_once 'connection.php';
session_start();

if($_SESSION["user"] > 0){
    $for_type_of_acc = mysqli_query($connect, "SELECT * FROM `acces`");
    foreach($for_type_of_acc as $i){
        $type_of_acc[] = $i;
    }
}
$_SESSION["data"] = [
    "quantity_of_types" => count($type_of_acc),
    "type_of_acc" => $type_of_acc
];
// то что до самой авторизации

$name = $_POST['name'];
$password = $_POST['password'];
$for_user_acces = $_POST['acess'];

if($for_user_acces !== "Выберите уровень доступа"){
    $user_acces = $for_user_acces;
}else{
    die("<h1 style='text-align: center;'>Вы не ввели уровень доступа</h1>");
}

if($name == null || $password == 0){
    die("<h1 style='text-align: center;'>Вы не ввели данные</h1>");
}else{
    $normal_pass = md5($password);
    $control_point =  mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `password`, `acces`) VALUES (NULL, '$name', '$normal_pass', '$user_acces')");
    echo "<h1 style='text-align: center;'>User создан</h1>";
    sleep(2);
    //header('Location: ');
    echo 1;
}





?>


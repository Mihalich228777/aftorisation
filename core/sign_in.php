<?php
session_start();
require_once 'connection.php';

$name = $_POST["name"];
$password = md5($_POST['password']);


echo $name, "<br>", $password;
// $for_result = mysqli_query($connect,"SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
// if(mysqli_num_rows($for_result) > 0){
//     $result = mysqli_fetch_assoc($for_result);
//     $_SESSION['user'] = [
//         "id" => $result['id'],
//         "name" => $result['name'],
//         "acces" => $result['acces']
//     ];
// }else{
//     echo "<h1 style='text-align: center;'>Вы ввели не верные данные</h1>";
// }
?>
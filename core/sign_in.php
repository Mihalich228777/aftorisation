<?php
session_start();
require_once 'connection.php';

$out = json_decode(file_get_contents('php://input'));

$name = $out->name;
$password = $out->password;

echo $name, "<br>", $password;

$for_result = mysqli_query($connect,"SELECT * FROM `users` WHERE `name` = '$name' AND `password` = '$password'");
if(mysqli_num_rows($for_result) > 0){
    $result = mysqli_fetch_assoc($for_result);
    $_SESSION['user'] = [
        "id" => $result['id'],
        "name" => $result['name'],
        "acces" => $result['acces']
    ];
    echo "Ok";
}else{
    echo "Error";
}
?>
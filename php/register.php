<?php
require_once '../conf/database.php';

if (isset($_POST['envoi'])) {

    if (empty($_POST['user_name']) or empty($_POST['user_nickname']) or empty($_POST['user_mail']) or empty($_POST['user_password']) or empty($_POST['user_pic'])) {
        echo "Veuillez remplir tous les champs";
        die();
    }

    $user_name = htmlspecialchars($_POST['user_name']);
    $user_nickname = htmlspecialchars($_POST['user_nickname']);
    $user_mail = htmlspecialchars($_POST['user_mail']);
    $user_password = sha1($_POST['user_password']);
    $user_pic = htmlspecialchars($_POST['user_pic']);

    $data = [$user_name, $user_nickname, $user_mail, $user_password, $user_pic];

    $user_insert = $database->prepare('INSERT INTO users(user_name, user_nickname, user_mail, user_password, user_pic)VALUES(?, ?, ?, ?, ?)');
    $user_insert->execute($data);

    $last_id = $database->lastInsertId();

    $_SESSION['user_id'] = $last_id;
    header('Location: ./index.php');
}
?>
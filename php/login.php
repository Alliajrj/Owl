<?php
require_once "../conf/database.php";

if (isset($_POST['send'])) {
    if (!empty($_POST['user_nickname']) and !empty($_POST['user_password'])) {
        $user_nickname = htmlspecialchars($_POST['user_nickname']);
        $user_password = sha1($_POST['user_password']);
        $data = [$user_nickname, $user_password];

        $user_insert = $database->prepare("SELECT * FROM users WHERE user_nickname = ? AND user_password = ?");
        $user_insert->execute($data);

        if ($user_insert->rowCount() === 0) {
            echo "Votre nom d'utilisateur et/ou mot de passe est/sont incorrect(s).";
            die();
        }

        $user = $user_insert->fetch();

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['user_nickname'] = $user['user_nickname'];

        header("Location: ../php/index.php");
        die();
    } else {
        echo "Veuillez compléter tous les champs...";
    }
}

require_once "../php/login.template.php";
?>
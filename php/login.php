<?php
require_once "../conf/database.php";

if (isset($_POST["connect"])) {
    if (!empty($_POST["user_mail"]) and !empty($_POST["user_password"])) {
        $user_mail = htmlspecialchars($_POST["user_mail"]);
        $user_password = sha1($_POST["user_password"]);
        $data = [$user_mail, $user_password];

        $user_insert = $database->prepare("SELECT * FROM user WHERE user_mail = ? AND user_password = ?");
        $user_insert->execute($data);

        if ($user_insert->rowCount() === 0) {
            echo "Votre adresse mail et/ou mot de passe est/sont incorrect(s).";
            die();
        }

        $_SESSION["user_id"] = $user_insert->fetch()["user_id"];
        header("Location: ./index.php");
        die();
    } else {
        echo "Veuillez compléter tous les champs...";
    }
}

require_once "../php/login.template.php";
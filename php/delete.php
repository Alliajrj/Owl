<?php
require_once '../conf/database.php';


if ($_SERVER['REQUEST_METHOD'] === "POST") {

    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_supp_post"
    ) {


        if (
            !empty($_POST['post_id'])
        ) {
            $data = [
                'post_id' => $_POST['post_id'],

            ];

            $request = $database->prepare("DELETE FROM posts WHERE post_id = :post_id");
            $request->execute($data);
            header("Location: ../php/profil.php");
        }
    }
}


?>
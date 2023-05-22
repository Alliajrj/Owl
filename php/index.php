<?php
require_once '../conf/database.php';
ini_set("date.timezone", "Europe/Paris");
$request = $database->prepare("SELECT * FROM posts ORDER BY post_date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    if (
        !empty($_GET['recherche'])
    ) {
        $data = [
            "recherche" => "%" . $_GET['recherche'] . "%",
        ];

        $request = $database->prepare("SELECT * FROM posts WHERE post_content LIKE :recherche ORDER BY post_date DESC");
        $request->execute($data);
        $posts = $request->fetchAll(PDO::FETCH_ASSOC);
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (
        isset($_POST['form'])
        && $_POST['form'] === "formulaire_ajout_post"
    ) {
        if (
            !empty($_POST['post_content'])
        ) {
            $post_content = $_POST['post_content'];
            $data = ["post_content" => $post_content];
            $request_insert = $database->prepare("INSERT INTO posts (post_content, post_date) VALUES (:post_content, NOW())");
            $post_inserted = $request_insert->execute($data);
        }
    }
}
require_once 'home.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Owl</title>
    <script src="javascript/sidebar.js" defer></script>
    <script src="javascript/modal.js" defer></script>
</head>

<body>
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

    ?>
    <div class="card hidden">
        <div class="top">
            <img class="icons" src="images/icons/x.svg" alt="close" />
            <img class="icons" src="images/icons/check.svg" alt="confirm" />
        </div>
        <div class="write">
            <img class="profil" src="images/PPAli.jpg" alt="profile pic" />
            <textarea class="text-input" id="post" placeholder=". . ."></textarea>
        </div>
        <div class="tags-post">
            <ul>
                <li class="couleur-tag-1">Mystère</li>
                <li class="couleur-tag-2">Crime</li>
                <li class="couleur-tag-3">Non résolu</li>
                <li class="couleur-tag-4">Meurtre</li>
                <li class="couleur-tag-5">Investigation</li>
                <li class="couleur-tag-6">Faits divers</li>
                <li class="couleur-tag-7">Enigmes</li>
                <li class="couleur-tag-8">Preuves</li>
                <li class="couleur-tag-9">Théories</li>
                <li class="couleur-tag-10">paranormal</li>
            </ul>
        </div>
        <div class="bottom">
            <img class="icons" src="images/icons/file-plus.svg" alt="add file" />
            <img class="icons" src="images/icons/image.svg" alt="add image" />
        </div>
    </div>

    <div>
        <div class="research">
            <div>
                <img src="images/icons/key.svg" alt="research" />
                <textarea class="searchbar" id="post" placeholder=". . ."></textarea>
            </div>
            <img class="minus" src="images/icons/minus.svg" alt="minus" />
        </div>
        <div class="wrapper"></div>
        <div class="sidebar">
            <div class="user">
                <img class="round" src="images/PPAli.jpg" alt="profile pic" />
                <div class="name">
                    <h1>Heart ♥</h1>
                    <h2>@Allia</h2>
                </div>
            </div>

            <img class="minus" src="images/icons/minus.svg" alt="minus" />
            <ol>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/home.svg" alt="home" />Home</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/book-open.svg" alt="news" />News</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/star.svg" alt="notifications" />Notifications</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/mail.svg" alt="messages" />Messages</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/bookmark.svg" alt="bookmark" />Bookmarks</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/settings.svg" alt="paramètres" />Paramètres</a>
                </li>
                <li>
                    <a href="#">
                        <img class="icons" src="images/icons/power.svg" alt="déconnexion" />Déconnexion</a>
                </li>
            </ol>
            <div class="feather">
                <img src="images/icons/feather.svg" alt="" id="plume" />
            </div>
        </div>
    </div>
    <div class="main">
        <header>
            <div class="ghost"></div>
            <img class="profil" src="images/PPAli.jpg" alt="profile pic" />

            <img class="logo" src="images/logoowl.png" alt="logo" />

            <img class="menu" src="images/icons/menu.svg" alt="menu" />
            <div class="ghost"></div>
        </header>
        <div class="tags">
            <ul>
                <li class="couleur-tag-1">Mystère</li>
                <li class="couleur-tag-2">Crime</li>
                <li class="couleur-tag-3">Non résolu</li>
                <li class="couleur-tag-4">Meurtre</li>
                <li class="couleur-tag-5">Investigation</li>
                <li class="couleur-tag-6">Faits divers</li>
                <li class="couleur-tag-7">Enigmes</li>
                <li class="couleur-tag-8">Preuves</li>
                <li class="couleur-tag-9">Théories</li>
                <li class="couleur-tag-10">Paranormal</li>
            </ul>
        </div>
        <div class="container">
            <div class="posts">
                <div>
                    <div class="user">
                        <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                        <div class="name">
                            <div class="name">
                                <h1>
                                    <?= $user["user_name"] ?>
                                </h1>
                                <h2>
                                    <?= $user["user_nickname"] ?>
                                </h2>
                                <h3>
                                    <?= date("d/m/Y", strtotime($post['post_date'])) . " à " . date("H:i", strtotime($post['post_date'])); ?>
                                </h3>
                            </div>

                        </div>
                    </div>
                    <div class="textinput">

                        <p>
                            <?= $post["post_content"] ?>
                        </p>
                        <img src="<?= $post_pic['post_pic'] ?>" alt="🖼️" />
                    </div>

                    <div class="interactions">
                        <img class="icons" src="images/icons/bookmark.svg" alt="" />
                        <div class="reactions">
                            <img class="icons" src="images/icons/zap.svg" alt="like" /><img class="icons"
                                src="images/icons/navigation.svg" alt="send" /><img class="icons"
                                src="images/icons/message-square.svg" alt="commentaire" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="user">
                        <img class="round" src="images/ppMiguel.jpg" alt="profile pic" />
                        <div class="name">
                            <h1>Spade ♠</h1>
                            <h2>@Kan_a_pesh - 23h</h2>
                        </div>
                    </div>
                    <div class="textinput">
                        <p>La disparition d'Elisa Lam - THREAD</p>
                    </div>
                    <img class="media" src="images/elisalam.jpg" alt="media" />

                    <div class="interactions">
                        <img class="icons" src="images/icons/bookmark.svg" alt="bookmark" />
                        <div class="reactions">
                            <img class="icons" src="images/icons/zap.svg" alt="like" />
                            <img class="icons" src="images/icons/navigation.svg" alt="send" />
                            <img class="icons" src="images/icons/message-square.svg" alt="commentaire" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="user">
                        <img class="round" src="images/PPLeo.jpg" alt="profile pic" />
                        <div class="name">
                            <h1>Clubs ♣</h1>
                            <h2>@Saikochi - 28/01</h2>
                        </div>
                    </div>
                    <div class="textinput">
                        <p>
                            Vos théories sur l'affaire Xavier Dupont De
                            Ligones ?
                        </p>
                    </div>
                    <div class="interactions">
                        <img class="icons" src="images/icons/bookmark.svg" alt="" />
                        <div class="reactions">
                            <img class="icons" src="images/icons/zap.svg" alt="like" /><img class="icons"
                                src="images/icons/navigation.svg" alt="send" /><img class="icons"
                                src="images/icons/message-square.svg" alt="commentaire" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbarbottom">
        <div class="navbarleft">
            <img src="images/icons/star.svg" alt="notifications" />
            <img src="images/icons/key.svg" alt="search" />
        </div>
        <img src="images/icons/feather.svg" alt="write a post" id="plume" />
    </div>
    <?php require_once 'index.template.php'; ?>

    <?php
    foreach ($posts as $post) {
        ?>
        <div class="div-publication">
            <img class="pp" src="<?= $user_pic['user_pic'] ?>" alt="🖼️" />
            <div class="content-publication">
                <div class="id">
                    <div class="name">
                        <h2 class="username">
                            <?= $user["user_name"] ?>
                        </h2>
                    </div>
                    <div class="div-handle">
                        <h2 class="handle">
                            <?= $user["user_nickname"] ?>
                        </h2>
                        <h3 class="dash">-</h3>
                        <h3 class="time">
                            <?= date("d/m/Y", strtotime($post['post_date'])) . " à " . date("H:i", strtotime($post['post_date'])); ?>
                        </h3>
                    </div>
                </div>
                <div class="post">
                    <p>
                        <?= $post["post_content"] ?>
                    </p>
                    <img src="<?= $post_pic['post_pic'] ?>" alt="🖼️" />
                </div>
            </div>
        </div>
        <?php
    }
    ?>

    <?php foreach ($posts as $post) {
        echo "<p>" . $post["post_content"] . "</p>";
        echo date("d/m/Y", strtotime($post['post_date'])) .
            " à " . date("H:i", strtotime($post['post_date'])); ?>
        <form action="../php/delete.php" method="post">
            <input type="hidden" name="form" value="formulaire_supp_post">
            <input type="hidden" name="post_id" value="<?php echo $post['post_id'] ?>">
            <input type="submit" value="delete">
        </form>
        <br>
    <?php } ?>
</body>

</html>
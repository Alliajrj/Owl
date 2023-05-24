<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Owl</title>
    <script src="../javascript/sidebar.js" defer></script>
    <script src="../javascript/modal.js" defer></script>
</head>

<body>
    <?php
    require_once '../conf/database.php';
    ini_set("date.timezone", "Europe/Paris");
    $request = $database->prepare("SELECT * FROM posts ORDER BY post_date DESC");
    $request->execute();
    $posts = $request->fetchAll(PDO::FETCH_ASSOC);

    $request = $database->prepare("SELECT * FROM users");
    $request->execute();
    $users = $request->fetchAll(PDO::FETCH_ASSOC);

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

        <form class="post" action="home.php" method="POST">
            <div class="top">
                <button class="close" type="close" value="Close"><img class="icons" src="../images/icons/x.svg"
                        alt="close" />
                </button>
                <button type="submit" value="Send"><img class="icons" src="../images/icons/check.svg" alt="confirm" />
                </button>
            </div>
            <div class="write">

                <input type="hidden" name="form" value="formulaire_ajout_post">

                <input class="text-input" placeholder=". . ." name="post_content" id="post_content" cols="30" rows="10"
                    required></input>
            </div>


        </form>
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
            <img class="icons" src="../images/icons/file-plus.svg" alt="add file" />
            <img class="icons" src="../images/icons/image.svg" alt="add image" />
        </div>
    </div>

    <div class="research">
        <form action="" method="GET">
            <div>
                <input class="searchbar" placeholder=". . ." type="text" name="recherche" id="recherche">
            </div>
            <img class="minus" src="../images/icons/minus.svg" alt="minus" />
        </form>
    </div>
    <div class="wrapper"></div>
    <div class="sidebar">
        <div class="user">
            <img class="round" src="../images/PPAli.jpg" alt="profile pic" />
            <div class="name">
                <h1>Heart ♥</h1>
                <h2>@Allia</h2>
            </div>
        </div>

        <img class="minus" src="../images/icons/minus.svg" alt="minus" />
        <ol>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/home.svg" alt="home" />Home</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/book-open.svg" alt="news" />News</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/star.svg" alt="notifications" />Notifications</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/mail.svg" alt="messages" />Messages</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/bookmark.svg" alt="bookmark" />Bookmarks</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/settings.svg" alt="paramètres" />Paramètres</a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/power.svg" alt="déconnexion" />Déconnexion</a>
            </li>
        </ol>
        <div class="feather">
            <img src="../images/icons/feather.svg" alt="" id="plume" />
        </div>
    </div>
    </div>
    <div class="main">
        <header>
            <div class="ghost"></div>
            <img class="profil" src="../images/PPAli.jpg" alt="profile pic" />

            <img class="logo" src="../images/logoowl.png" alt="logo" />

            <img class="menu" src="../images/icons/menu.svg" alt="menu" />
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
            <?php
            foreach ($posts as $post) {
                ?>
                <div class="posts">
                    <div>
                        <div class="user">
                            <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                            <div class="name">
                                <div class="name">
                                    <h1>
                                        <?= $users["user_name"]; ?>
                                    </h1>
                                    <h2>
                                        <?= $users["user_nickname"]; ?>
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
                            <img class="media" src="<?= $post_pic['post_pic'] ?>" alt="🖼️" />
                        </div>

                        <div class="interactions">
                            <img class="icons" src="../images/icons/bookmark.svg" alt="" />
                            <div class="reactions">
                                <img class="icons" src="../images/icons/zap.svg" alt="like" /><img class="icons"
                                    src="../images/icons/navigation.svg" alt="send" /><img class="icons"
                                    src="../images/icons/message-square.svg" alt="commentaire" />
                            </div>
                        </div>
                    </div>


                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="navbarbottom">
        <div class="navbarleft">
            <img src="../images/icons/star.svg" alt="notifications" />
            <img src="../images/icons/key.svg" alt="search" />
        </div>
        <img src="../images/icons/feather.svg" alt="write a post" id="plume2" />
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owl</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="../javascript/sidebar.js" defer></script>
    <script src="../javascript/deletebutton.js" defer></script>
</head>

<?php
require_once '../conf/database.php';
ini_set("date.timezone", "Europe/Paris");
$request = $database->prepare("SELECT * FROM posts INNER JOIN users ON users.user_id = posts.post_author_id ORDER BY post_date DESC");
$request->execute();
$posts = $request->fetchAll(PDO::FETCH_ASSOC);

$request = $database->prepare("SELECT * FROM users");
$request->execute();
$users = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <div class="research">
        <form action="" method="GET">
            <div>
                <input class="searchbar" placeholder=". . ." type="text" name="recherche" id="recherche">
            </div>
            <img class="minus" src="../images/icons/minus.svg" alt="minus" />
        </form>
        <div class="tagspc">
            <ul>
                <li><button class="filter couleur-tag-1">Mystère</button></li>
                <li><button class="filter couleur-tag-2">Crime</button></li>
                <li><button class="filter couleur-tag-3">Non résolu</button></li>
                <li><button class="filter couleur-tag-4">Meurtre</button></li>
                <li><button class="filter couleur-tag-5">Investigation</button></li>
                <li><button class="filter couleur-tag-6">Faits divers</button></li>
                <li><button class="filter couleur-tag-7">Enigmes</button></li>
                <li><button class="filter couleur-tag-8">Preuves</button></li>
                <li><button class="filter couleur-tag-9">Théories</button></li>
                <li><button class="filter couleur-tag-10">Paranormal</button></li>
            </ul>
        </div>
    </div>

    <div class="wrapper"></div>
    <div class="sidebar">

        <?php if (isset($_SESSION['user_name'])) { ?>
            <div class="user">
                <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                <div class="name">

                    <h1>
                        <?php echo $_SESSION['user_name']; ?>
                    </h1>
                    <h2>
                        <?php echo $_SESSION["user_nickname"]; ?>
                    </h2>

                </div>
            </div>
        <?php } ?>

        <img class="minus" src="../images/icons/minus.svg" alt="minus" />
        <ol>
            <li>
                <a href="../php/home.php">
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
                <a href="../php/login.php">
                    <img class="icons" src="../images/icons/power.svg" alt="déconnexion" />Déconnexion</a>
            </li>
        </ol>

    </div>
    <div class="main">
        <header>
            <div class="ghost"></div>
            <img class="profil" src="../images/PPAli.jpg" alt="profile pic" />

            <img class="logo" src="../images/logoowl.png" alt="logo" />

            <img class="menu" src="../images/icons/menu.svg" alt="menu" />
            <div class="ghost"></div>
        </header>
        <div class="container">
            <div class="buttons">
                <button>POSTS</button>
                <button>MEDIAS</button>
            </div>
            <?php
            foreach ($posts as $post) {
                ?>
                <?php if ($post['post_author_id'] == $_SESSION['user_id']) { ?>
                    <div class="posts">
                        <div>
                            <div class="top">
                                <div class="user">
                                    <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                                    <div class="name">
                                        <div class="name">
                                            <h1>
                                                <?= $_SESSION["user_name"]; ?>
                                            </h1>
                                            <h2>
                                                <?= $_SESSION["user_nickname"]; ?>
                                            </h2>
                                            <h3>
                                                <?= date("d/m/Y", strtotime($post['post_date'])) . " à " . date("H:i", strtotime($post['post_date'])); ?>
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <form action="delete.php" method="POST">
                                    <input type="hidden" name="form" value="formulaire_supp_post" />
                                    <input type="hidden" name="post_id" value="<?= $post['post_id'] ?>" />

                                    <button class="iconbtn" type="submit">
                                        <img class="icons deletebtn" src="../images/icons/trash-2.svg" alt="delete" />
                                    </button>
                                </form>
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
                <?php } ?>
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
    </div>
</body>

</html>
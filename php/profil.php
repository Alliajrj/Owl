<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owl</title>
    <link rel="stylesheet" href="../css/style.css" />
    <script src="javascript/sidebar.js" defer></script>
    <script src="javascript/modal.js" defer></script>
    <script src="javascript/deletebutton.js" defer></script>
</head>

<body>
    <div class="deletecard hidden">
        <p>Êtes-vous sûr(e) de vouloir supprimer ce post ?</p>
        <button class="btn">Oui</button>
        <button class="btn">Non</button>
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
                <a href="#">
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
                <div class="posts">
                    <div>
                        <div class="top">
                            <div class="user">
                                <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                                <div class="name">
                                    <div class="name">
                                        <h1>
                                            <?= $post["post_id"]; ?>
                                        </h1>
                                        <h2>
                                            <?= $post["post_author_id"]; ?>
                                        </h2>
                                        <h3>
                                            <?= date("d/m/Y", strtotime($post['post_date'])) . " à " . date("H:i", strtotime($post['post_date'])); ?>
                                        </h3>
                                    </div>
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
        <img src="../images/icons/feather.svg" alt="write a post" id="plume" />
    </div>
</body>

</html>
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
    <script src="../javascript/filtertag.js" defer></script>
    <script src="../javascript/localstorage.js" defer></script>
</head>

<body>
    <?php
    require_once '../conf/database.php';
    ini_set("date.timezone", "Europe/Paris");
    $request = $database->prepare("SELECT * FROM posts INNER JOIN users ON users.user_id = posts.post_author_id ORDER BY post_date DESC");
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
                $user_id = $_POST['user_id'];
                $tag = $_POST['tag'];
                $img_name = null;

                if (isset($_FILES['image_url'])) {
                    $img_name = $_FILES['image_url']['name'];
                    $tmp_image_name = $_FILES['image_url']['tmp_name'];
                    $upload = __DIR__ . '/../uploads/';
                    move_uploaded_file($tmp_image_name, $upload . $img_name);
                }

                $data = ["post_content" => $post_content, "user_id" => $user_id, "post_tag" => $tag, "image_url" => $img_name];
                $request_insert = $database->prepare("INSERT INTO posts (post_author_id, post_content, post_date, post_tag, image_url) VALUES (:user_id, :post_content, NOW(), :post_tag, :image_url)");
                $post_inserted = $request_insert->execute($data);

                header("Location: ../php/index.php");
            }
        }
    }

    ?>
    <div class="background">
        <div class="logsign">
            <h1>Envie de lire la suite ?</h1>
            <a href="../php/register.php"><button class="bootstrap">Inscrivez-vous !</button></a>
            <p>Déjà inscrit ? <a class="link" href="../php/login.php" class="link">Connectez-vous !</a></p>
        </div>
    </div>
    <div class="card hidden">
        <div>
            <div class="top">
                <button class="close iconbtn" type="close" value="Close"><img class="icons" src="../images/icons/x.svg"
                        alt="close" />
                </button>
                <form class="post" action="index.php" method="POST" enctype="multipart/form-data">
                    <button class="iconbtn" type="submit" value="Send" id="submit"><img class="icons"
                            src="../images/icons/check.svg" alt="confirm" />
                    </button>
            </div>
            <div class="write">

                <input type="hidden" name="form" value="formulaire_ajout_post">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">

                <textarea class="text-input" placeholder=". . ." name="post_content" id="post_content" cols="30"
                    rows="10" required></textarea>

            </div>
            <div>
                <select name="tag" id="">
                    <option value="mystere">Mystère</option>
                    <option value="crime">Crime</option>
                    <option value="non-resolu">Non résolu</option>
                    <option value="meurtre">Meurtre</option>
                    <option value="investigation">Investigation</option>
                    <option value="faits-divers">Faits divers</option>
                    <option value="enigmes">Enigmes</option>
                    <option value="preuves">Preuves</option>
                    <option value="theories">Théories</option>
                    <option value="paranormal">Paranormal</option>
                </select>

            </div>




            <div class="tags-post">
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
            <div class="bottom">
                <label>
                    <span>
                        <input class="imgpost" type="file" accept="img/jpeg img/png" name="image_url">
                        <img class="icons iconbtn" src="../images/icons/image.svg" alt="add image">
                    </span>
                </label>

            </div>

        </div>
        </form>
    </div>

    <div class="research">
        <form action="" method="GET">
            <div class="interactions">
                <img class="icons key" src="../images/icons/key.svg" alt="">
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
                <li><button class="filter bootstrap reset">Tous</button></li>
            </ul>
        </div>
    </div>
    <div class="wrapper"></div>
    <div class="sidebar">

        <a href="../php/profil.php">
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
        </a>

        <img class="minus" src="../images/icons/minus.svg" alt="minus" />
        <ol>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/home.svg" alt="home" />
                    <h4>Home</h4>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/book-open.svg" alt="news" />
                    <h4>News</h4>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/star.svg" alt="notifications" />
                    <h4>Notifications</h4>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/mail.svg" alt="messages" />
                    <h4>Messages</h4>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/bookmark.svg" alt="bookmark" />
                    <h4>Bookmarks</h4>
                </a>
            </li>
            <li>
                <a href="#">
                    <img class="icons" src="../images/icons/settings.svg" alt="paramètres" />
                    <h4>Paramètres</h4>
                </a>
            </li>
            <?php if (isset($_SESSION['user_name'])) { ?>
                <li>
                    <a href="../php/logout.php">
                        <img class="icons" src="../images/icons/power.svg" alt="déconnexion" />
                        <h4>Déconnexion</h4>
                    </a>
                </li>
            <?php } ?>
            <?php if (!isset($_SESSION['user_name'])) { ?>
                <li>
                    <a href="../php/login.php">
                        <img class="icons" src="../images/icons/power.svg" alt="connexion" />Connexion</a>
                </li>
            <?php } ?>
            <?php if (!isset($_SESSION['user_name'])) { ?>
                <li>
                    <a href="../php/register.php">
                        <img class="icons" src="../images/icons/user.svg" alt="inscription" />Inscription</a>
                </li>
            <?php } ?>
        </ol>
        <div class="feather">
            <button class="iconbtn"><img src="../images/icons/feather.svg" alt="" id="plume" /></button>
        </div>
    </div>
    </div>
    <div class="main">
        <header>
            <div class="ghost"></div>
            <?php if (isset($_SESSION['user_name'])) { ?>
                <img class="profil" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
            <?php } ?>
            <img class="logo" src="../images/logoowl.png" alt="logo" />

            <img class="menu" src="../images/icons/menu.svg" alt="menu" />
            <div class="ghost"></div>
        </header>
        <div class="tags">
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
                <li><button class="filter bootstrap reset">Tous</button></li>
            </ul>
        </div>
        <div class="container">
            <?php
            foreach ($posts as $post) {
                ?>
                <div class="posts <?php echo $post['post_tag']; ?>">
                    <div>
                        <div class="user">
                            <img class="round" src="<?= $user_pic['user_pic'] ?>" alt="profile pic" />
                            <div class="name">
                                <div class="name">
                                    <h1>
                                        <?= $post["user_name"]; ?>
                                    </h1>
                                    <h2>
                                        <?= $post["user_nickname"]; ?>
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
                            <?php if($post["image_url"]): ?>
                                <img class="media" src="../uploads/<?= $post['image_url'] ?>" alt="🖼️" /> 
                                <?php endif; ?>
                        </div>

                        <div class="interactions">
                            <img class="icons" src="../images/icons/bookmark.svg" alt="" />
                            <div class="reactions">
                                <img class="icons like" src="../images/icons/zap.svg" alt="like" /><img class="icons"
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
        <div class="feather2">
            <button class="iconbtn "><img src="../images/icons/feather.svg" alt="write a post" id="plume2" /></button>
        </div>
    </div>

    <?php
    if (!isset($_SESSION['user_name'])) { ?>
        <script src="../javascript/loginorsign.js" defer></script>
    <?php } ?>

</body>

</html>
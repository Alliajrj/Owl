<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Owl</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="javascript/sidebar.js" defer></script>
        <script src="javascript/modal.js" defer></script>
        <script src="javascript/deletebutton.js" defer></script>
    </head>
    <body>
        <div class="card hidden">
            <div class="top">
                <img class="icons" src="images/icons/x.svg" alt="close" />
                <img class="icons" src="images/icons/check.svg" alt="confirm" />
            </div>
            <div class="write">
                <img class="profil" src="images/PPAli.jpg" alt="profile pic" />
                <textarea
                    class="text-input"
                    id="post"
                    placeholder=". . ."
                ></textarea>
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
                <img
                    class="icons"
                    src="images/icons/file-plus.svg"
                    alt="add file"
                />
                <img
                    class="icons"
                    src="images/icons/image.svg"
                    alt="add image"
                />
            </div>
        </div>
        <div class="deletecard hidden">
            <p>Êtes-vous sûr(e) de vouloir supprimer ce post ?</p>
            <button class="btn">Oui</button>
            <button class="btn">Non</button>
        </div>
        <div class="research">
            <div>
                <img src="images/icons/key.svg" alt="research" />
                <textarea
                    class="searchbar"
                    id="post"
                    placeholder=". . ."
                ></textarea>
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
                    <img
                        class="icons"
                        src="images/icons/home.svg"
                        alt="home"
                    />Home
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/book-open.svg"
                        alt="news"
                    />News
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/star.svg"
                        alt="notifications"
                    />Notifications
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/mail.svg"
                        alt="messages"
                    />Messages
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/bookmark.svg"
                        alt="bookmark"
                    />Bookmarks
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/settings.svg"
                        alt="paramètres"
                    />Paramètres
                </li>
                <li>
                    <img
                        class="icons"
                        src="images/icons/power.svg"
                        alt="déconnexion"
                    />Déconnexion
                </li>
            </ol>
            <div class="feather">
                <img src="images/icons/feather.svg" alt="" id="plume" />
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
            <div class="banner">
                <div class="name">
                    <h1>Heart ♥</h1>
                    <h2>@Allia</h2>
                </div>
                <div class="numbers">
                    <p>78 abonnements</p>
                    <p>52 abonnés</p>
                    <p>2 posts</p>
                </div>
            </div>
            <div class="container">
                <div class="buttons">
                    <button>POSTS</button>
                    <button>MEDIAS</button>
                </div>
                <div class="posts">
                    <div>
                        <div class="post-top">
                            <div class="user">
                                <img
                                    class="round"
                                    src="images/PPAli.jpg"
                                    alt="profile pic"
                                />
                                <div class="name">
                                    <h1>Heart ♥</h1>
                                    <h2>@Allia - 2h</h2>
                                </div>
                            </div>
                            <img
                                class="icons deletebtn"
                                src="images/icons/trash-2.svg"
                                alt="delete"
                            />
                        </div>
                        <div class="textinput">
                            <p>
                                “Making a Murderer” sur Netflix c’est grave cool
                            </p>
                        </div>
                        <div class="interactions">
                            <img
                                class="icons"
                                src="images/icons/bookmark.svg"
                                alt=""
                            />
                            <div class="reactions">
                                <img
                                    class="icons"
                                    src="images/icons/zap.svg"
                                    alt="like"
                                /><img
                                    class="icons"
                                    src="images/icons/navigation.svg"
                                    alt="send"
                                /><img
                                    class="icons"
                                    src="images/icons/message-square.svg"
                                    alt="commentaire"
                                />
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="post-top">
                            <div class="user">
                                <img
                                    class="round"
                                    src="images/PPAli.jpg"
                                    alt="profile pic"
                                />
                                <div class="name">
                                    <h1>Heart ♥</h1>
                                    <h2>@Allia - 18h</h2>
                                </div>
                            </div>
                            <img
                                class="icons deletebtn"
                                src="images/icons/trash-2.svg"
                                alt="delete"
                            />
                        </div>

                        <img
                            class="media"
                            src="images/pl.jpg"
                            alt="media"
                        />

                        <div class="interactions">
                            <img
                                class="icons"
                                src="images/icons/bookmark.svg"
                                alt="bookmark"
                            />
                            <div class="reactions">
                                <img
                                    class="icons"
                                    src="images/icons/zap.svg"
                                    alt="like"
                                />
                                <img
                                    class="icons"
                                    src="images/icons/navigation.svg"
                                    alt="send"
                                />
                                <img
                                    class="icons"
                                    src="images/icons/message-square.svg"
                                    alt="commentaire"
                                />
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
    </body>
</html>
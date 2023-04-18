<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body class="vh-100 pt-3">
    <?php
    require_once 'database.php';

    if (isset($_POST['envoi'])) {
        if (!empty($_POST['user_name']) && !empty($_POST['user_nickname']) && !empty($_POST['user_mail']) && !empty($_POST['user_password']) && !empty($_POST['user_picture'])) {
            $user_name = htmlspecialchars($_POST['user_name']);
            $user_nickname = htmlspecialchars($_POST['user_nickname']);
            $user_mail = htmlspecialchars($_POST['user_mail']);
            $user_password = sha1($_POST['user_password']);
            $user_picture = htmlspecialchars($_POST['user_picture']);

            $data = [$user_name, $user_nickname, $user_mail, $user_password, $user_picture];

            $user_insert = $database->prepare('INSERT INTO users(user_name, user_nickname, user_mail, user_password, user_picture)VALUES(?,?,?,?,?)');
            $user_insert->execute($data);
            header('Location: index.php');
            die();

        } else {
            echo "Veuillez compléter tous les champs...";
        }
    }
    ?>
    <div class="container">
        <img src="images/logo owl.png" alt="logo" class="rounded shadow d-block mx-auto m-3" width="55px"
            height="55px" />
        <form class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-column align-items-center">
                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" id="name" placeholder=" " required />
                    <label class="text" for="name">Nom</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" id="mail" placeholder=" " required />
                    <label class="text" for="mail">Adresse e-mail</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" id="username" placeholder="Nom d'utilisateur" required />
                    <label class="text" for="username">Nom d'utilisateur</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" id="password" placeholder="Mot de passe" />
                    <label class="text" for="password">Mot de passe</label>
                </div>

                <div class="form-check-inline d-flex justify-content-center m-3 gap-2">
                    <input class="form-check-input" type="radio" name="conditions" id="cgu" />
                    <label class="form-check-label" for="cgu">J'accepte les conditions générales
                        d'utilisation</label>
                </div>
                <div class="d-flex d-flex-column justify-content-center m-3">
                    <button type="button" class="btn d-flex justify-content-center">
                        Inscription
                    </button>
                </div>
                <div class="d-flex justify-content-center">
                    <label>Déjà membre ?
                        <a href="login.html" class="link">
                            Connectez-vous !</a></label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
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

    <div class="container">
        <img src="images/logo owl.png" alt="logo" class="rounded shadow d-block mx-auto m-3" width="55px"
            height="55px" />
        <form class="d-flex flex-column justify-content-center" method="POST">
            <div class="d-flex flex-column align-items-center">

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="name" id="name" placeholder=" " required />
                    <label class="text" for="name">Nom</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="mail" id="mail" placeholder=" " required />
                    <label class="text" for="mail">Adresse e-mail</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="nickname" id="username" placeholder="Nom d'utilisateur" required />
                    <label class="text" for="username">Nom d'utilisateur</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Mot de passe" />
                    <label class="text" for="password">Mot de passe</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="pic" id="profilepic" placeholder="Photo de profil" />
                    <label class="text" for="photo de profil">Photo de profil</label>
                </div>

                <div class="d-flex d-flex-column justify-content-center m-3">
                    <button type="submit" name="envoi" class="btn d-flex justify-content-center">
                        Inscription
                    </button>
                </div>
                <div class="d-flex justify-content-center">
                    <label>Déjà membre ?
                        <a href="../php/login.php" class="link">
                            Connectez-vous !</a></label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
    require_once '../conf/database.php';

    if (isset($_POST['envoi'])) {
        if (!empty($_POST['name']) && !empty($_POST['nickname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['pic'])){
            $user_name = $_POST['name'];
            $user_nickname = htmlspecialchars($_POST['nickname']);
            $user_mail = htmlspecialchars($_POST['mail']);
            $user_password = sha1($_POST['password']);
            $user_pic = htmlspecialchars($_POST['pic']);

            $data = [
            $user_name, $user_nickname, $user_mail, $user_password, $user_pic];

            $user_insert = $database->prepare('INSERT INTO users($user_name, $user_nickname, $user_mail, $user_password, $user_pic)VALUES($user_name, $user_nickname,$user_mail, $user_password, $user_pic)');
            $user_insert->execute( );
            header('Location: login.php');
            die();
        
        } else {
            echo "Veuillez compléter tous les champs...";
        }
    }
   
    
    ?>
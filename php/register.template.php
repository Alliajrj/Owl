<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/bootstrap.css" />
</head>

<body class="vh-100 pt-3">
    <div class="container">
        <img src="../images/logoowl.png" alt="logo" class="rounded shadow d-block mx-auto m-3" width="55px"
            height="55px" />
        <form action="../php/register.php" class="d-flex flex-column justify-content-center" method="POST" enctype="multipart/form-data">
            <div class="d-flex flex-column align-items-center">
                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="user_name" id="name" placeholder=" " required />
                    <label class="text" for="name">Nom</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="email" class="form-control" name="user_mail" id="mail" placeholder=" " required />
                    <label class="text" for="mail">Adresse e-mail</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="user_nickname" id="username"
                        placeholder="Nom d'utilisateur" required />
                    <label class="text" for="username">Nom d'utilisateur</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="password" class="form-control" name="user_password" id="password"
                        placeholder="Mot de passe" />
                    <label class="text" for="password">Mot de passe</label>
                </div>

                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="file" class="form-control" name="user_pic" id="profilepic"
                        placeholder="Photo de profil" />
                    <label class="text" for="photo de profil">Photo de profil</label>
                </div>

                <div class="d-flex d-flex-column justify-content-center m-3">
                    <button type="submit" id="signin" name="envoi" class="btn d-flex justify-content-center bootstrap">
                        Inscription
                    </button>
                </div>
                <div class="d-flex justify-content-center">
                    <label>Déjà membre ?
                        <a href="../php/login.template.php" class="link">
                            Connectez-vous !</a></label>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
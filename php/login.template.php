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
        <form action="../php/login.php" class="d-flex flex-column justify-content-center" method="POST">
            <div class="d-flex flex-column align-items-center">
                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="text" class="form-control" name="user_nickname" id="username" placeholder=" "
                        required />
                    <label class="text" for="username">Nom d'utilisateur</label>
                </div>
                <div class="form-floating col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2 mb-3">
                    <input type="password" class="form-control" name="user_password" id="password"
                        placeholder="Mot de passe" required />
                    <label class="text" for="password">Mot de passe</label>
                </div>
            </div>
            <div class="d-flex d-flex-column justify-content-center m-3">
                <button type="submit" id="login" name="send" class="btn d-flex justify-content-center bootstrap">
                    Connexion
                </button>
            </div>
            <div class="d-flex justify-content-center">
                <label>Pas encore membre ?
                    <a href="../php/register.template.php" class="link">
                        Inscrivez-vous !</a></label>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

</html>
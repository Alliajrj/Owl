
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Owl</title>
</head>

<body>
    <main>
        <br>
        <div class="post">
            <form action="" method="GET">
                <br>
                <input class="search" placeholder="Search posts" type="text" name="recherche" id="recherche">
            </form>
            <br>
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
        </div>
        <br>
        <div>
            <form class="post" action="" method="POST">
                <input type="hidden" name="form" value="formulaire_ajout_post">
                <br>
                <input class="write" placeholder=" Write a post" name="post_content" id="post_content" cols="30"
                    rows="10" required></input>
                <br>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </main>

</body>

</html>
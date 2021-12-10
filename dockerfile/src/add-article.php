<?php 

session_start();
include_once('model/database-connection.php');




if (isset($_SESSION['username'])) {
    if (isset($_POST['title'], $_POST['content'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];

        if (empty($title) or empty($content)) {
            $erreur = "Vous devez remplir la/les case(s) manquant(es)";
        } else {
            $query = $pdo->prepare('INSERT INTO articles(title,content,date) VALUES (?, ?, NOW())');
            $query->bindValue(1, $title);
            $query->bindValue(2, $content);
            $query->execute();

            header("location:homepage.php");

            
        }
    }
} else {
    echo " t'es un con";
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title> HomePage </title>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div class="container">
            <a href="homepage.php" id="home"> Home </a>
            <a href="add-article.php" id="add"> - Ajouter un article </a>
            <a href='index.php?deconnexion=true'><span> - Déconnexion</span></a>

        <br>

        <h1> Ajouter un article </h1>

        <?php if (isset($erreur)) { ?>
            <br><br>
            <small style="color:#aa0000;"><?php echo $erreur; ?>
            <br><br>
        <?php } ?>

        <form action="add-article.php" method="post" autocomplete="off">
            <input type="text" name="title" placeholder="Titre"/><br><br>
            <textarea rows=20 cols=70 name="content" placeholder="Contenu"></textarea><br><br>
            <input type="submit" value="Ajouter"/>


        </form>

        <div>
    </body>
</html>
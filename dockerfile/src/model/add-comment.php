<?php 

session_start();
include_once('model/database-connection.php');
include_once('model/article.php');


if (isset($_SESSION['username'])) {
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        $id = $_GET['id'];

        if (empty($title) or empty($content)) {
            $erreur = "Vous devez remplir la/les case(s) manquant(es)";
        } else {
            $query = $pdo->prepare('INSERT INTO comment(comment,article_id,date) VALUES (?, ?, NOW())');
            $query->bindValue(1, $comment);
            $query->bindValue(2, $id);
            $query->execute();

            header("location:homepage.php");

            
        }
    }
} else {
    echo " t'es un con";
}

?>
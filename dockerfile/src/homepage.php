<?php 
session_start();
include_once('model/database-connection.php');
include_once('model/article.php');

$article = new Article;
$articles = $article->fetch_all();

?>
<!doctype html>
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
            <a href="delete-article.php" id="delete"> - Supprimer un article </a>
            <a href='index.php?deconnexion=true'><span> - Déconnexion</span></a>

            <ol>
                <?php foreach ($articles as $article) { ?>
                <li>
                    <a href=" article.php?id=<?php echo $article['id']; ?>"> 
                    <?php  echo $article['title']; ?> </a>
                    <small> - posté le <?php echo $article['date']; ?> </small>
                </li>
                <?php } 
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:index.php");
                   }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                    echo "<br>Bonjour $user, vous êtes connectés";
                }
                    ?>
            </ol>

        <div>
    </body>
</html>
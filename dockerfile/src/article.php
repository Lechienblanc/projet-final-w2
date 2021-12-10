<?php
session_start();
include_once('model/database-connection.php');
include_once('model/article.php');
include_once('delete-article.php');

$article = new Article;
$articles = $article->fetch_all();
$comment= New Article;
$comments = $comment->fetch_comment();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $article->fetch_data($id);
    $commentaire = $comment->fetch_all($id);



 var_dump($commentaire);
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
                    <br>
                    <br>
                    <form action="delete-article.php" method="POST">
                        <input type="hidden" name="to_delete" id="to_delete" value="<?php echo $data['id']; ?>"> 
                        <input type="submit" name="supprimer" value="supprimer l'article" class="button_delete" >
                    </form>

                    <h1> <?php echo $data['title'];?> </h1>
                    <p> posté le <?php echo $data['date'];?> </p>
                    <p> écrit par <?php echo $data['author'];?> </p>
                    <p><?php echo $data['content'];?> </p>


                    <h1> Commentaires </h1>
                    <form action="add-comment.php" method="post" size>
                        <textarea rows=5 cols=100 name="comment" placeholder="Ecrire votre commentaire ici..."></textarea><br>
                        <input type="hidden" name="comment" id="comment" value="<?php echo $data['id']; ?>"> 
                        <input type="submit" value="Ajouter un commentaire"/>
                    </form>
                    <p> <?php echo $commentaire['content']; ?></p>
                    <p> <?php echo $commentaire['date']; ?></p>


                <div>
            </body>
        </html>



<?php
} else {
    header('Location: index.php');
    exit();
} 

?>
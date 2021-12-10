<?php 
ob_start();
session_start();
include_once('model/database-connection.php');
include_once('model/article.php');



if (isset($_SESSION['username'])) {
    if(isset($_POST['to_delete'])){
        $id = $_POST['to_delete'];

        var_dump($id);
        $query = $pdo->prepare('DELETE FROM articles WHERE id = ?');
        $query-> bindValue(1, $id);
        $query->execute();

        header('location:homepage.php');

    }

}else{
    echo "tu n'es pas connecté";
}

?>

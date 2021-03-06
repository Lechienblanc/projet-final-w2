<?php

class article {
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles");
        $query->execute();

        return $query->fetchAll();

    }

    public function fetch_data($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM articles WHERE id = ? "); 
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch(); 
    }

    public function fetch_comment() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM comment WHERE article_id= ? ");
        $query->bindValue(1,$article_id);
        $query->execute();

        return $query->fetch();
    }
}

?>
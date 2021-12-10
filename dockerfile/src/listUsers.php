<?php

class listUsers {
    public function fetch_all() {
        global $db;

        $query = $db->prepare("SELECT * FROM utilisateur");
        $query->execute();

        return $query->fetchAll();

    }

    public function fetch_data($id) {
        global $db;

        $query = $db->prepare("SELECT * FROM utilisateur WHERE id = ? "); 
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch(); 
    }
}

?>
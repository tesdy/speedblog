<?php


function get_book($id) {

    global $db;

    try {
        $req = $db->prepare("SELECT 
           b.id,
           title,
           content,
           image,
           editeddate, 
           type
           FROM books as b
           WHERE b.id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();

        $result =  $req->fetchObject();
        if(empty($result)) {
            header('Location: index.php');
        }

    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $result;
}
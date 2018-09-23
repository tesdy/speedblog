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
           type,
           a.name as aName 
           FROM books as b
           LEFT JOIN authors as a
           ON b.authorid = a.id
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
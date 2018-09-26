<?php

// Function that recovers the last 6 books ! */
function get_books() {

    global $db;
    $req = $db->query("SELECT 
           distinct(b.id),
           adddate,
           title,
           content,
           image,
           editeddate, 
           a.name as aName 
           FROM books as b
           JOIN author_book as ab
           ON b.id = ab.book_id
           JOIN authors as a
           ON ab.author_id = a.id
           WHERE posted = 1
           ORDER BY adddate DESC
           LIMIT 0, 10;"
    );

    $result = array();
    $idval = array();

    // Récupération des données :
    while($rows = $req->fetchObject()) {
        $result[] = $rows;

        // Récupération des auteurs pour UNE BD !
        // Vérifier si l'id du book en cours existe déjà dans result[] (éviter les doub/trip/lette de book)
        if(array_key_exists($rows->id, $idval)) {
            // on parcours le tableau résultat qui contient des objets book
            foreach ($result as $item => $index) {
                // objet par objet on parcours les "attributs" (cellule de la table)
                foreach ($index as $key => $value) {
                    // On vérifie la cellule aName de chaque objet et si le nom en cours est déjà présent !
                    if($key == 'aName' && $result[$item]->aName !== $rows->aName) {
                        $result[$item]->aName .= " & " . $rows->aName; // on concatène les différents auteurs du livre en cours
                    }
                }
            }
            array_splice($result, -1); // suppression des data de l'objet en cours, on voulait juste le nom du ou des co-auteur(s)
       // Fin du if(id du bouquin en cours existe déjà dans result[])
        } else {
            $idval[$rows->id] = $rows->aName;
        }
    }

    // accueil on garde les 5 derniers posted
    $result = array_splice($result, 0, 5);


    return ($result);
}

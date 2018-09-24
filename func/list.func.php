<?php

function get_books() {

    global $db;
    $req = $db->query("SELECT 
           b.id,
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
           LIMIT 0, 8;"
    );

    $result = array();
    $idval = array();


    while($rows = $req->fetchObject()) {
        $result[] = $rows;

        if(array_key_exists($rows->id, $idval)) {
            foreach ($result as $item => $index) {
                foreach ($index as $key => $value) {
                    if($key == 'aName' && $result[$item]->aName !== $rows->aName) {
                        $result[$item]->aName .= "," . $rows->aName;


                    }
                }
            }
            array_splice($result, -1);
        } else {
            $idval[$rows->id] = $rows->aName;
        }

    }


    return ($result);
}

/*
 1 on récupère tous les livre ainsi que l'id de l'auteur par le biais de author_book
livre 1 -> author 1
livre 1 -> author 2
livre 2 -> author 3 ...

2 on récupère pour chaque résultat l'auteur qui a un id lié au book




 */
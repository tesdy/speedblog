<?php

function get_books() {

    global $db;

    $req = $db->query("SELECT 
           b.id,
           title,
           content,
           image,
           editeddate, 
           a.name as aName 
           FROM books as b
           LEFT JOIN authors as a
           ON b.authorid = a.id
           WHERE posted = 1
           ORDER BY b.adddate DESC
           LIMIT 0, 2");

    $result = [];

    while($rows = $req->fetchObject()) {
        $result[] = $rows;

    }

    return $result;
}
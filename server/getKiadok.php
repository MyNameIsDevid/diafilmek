<?php
    include "db.php";

    $cmd = $_GET["cmd"];

    if(strcmp($cmd, "get") == 0){
        $result = $db->query("SELECT nev, id FROM kiado")->fetchAll();
    }else{
        $result = $db->query("SELECT cim, kiadasiev AS kiadas, kocka FROM film INNER JOIN kiado ON kiado.id = film.kiadoid WHERE kiado.id = $cmd ORDER BY kiadas DESC")->fetchAll();
    }

    echo json_encode($result);

?>
<?php
    include "db.php";

    $kiado = $_GET["kiado"];

    $result = $db->exec("INSERT INTO kiado (nev) VALUES ('$kiado')");

    echo json_encode($result);

?>
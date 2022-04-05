<?php
    include "db.php";

    $result = $db->query("SELECT kiadasiev, COUNT(id) AS db FROM film GROUP BY kiadasiev;")->fetchAll();
    echo json_encode($result);
?>
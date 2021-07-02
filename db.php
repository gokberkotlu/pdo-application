<?php

    try {
        $db = new PDO("mysql:host=127.0.0.1;dbname=adres_defteri;charset=utf8","root","");
    } catch(PDOException $e) {
        echo $e->getMessage();
    }



?>
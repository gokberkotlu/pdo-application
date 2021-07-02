<?php

    $id = $_GET["id"];
    
    include_once("db.php");

    $delete = $db->prepare("DELETE FROM adres WHERE id=:id");
    $delete->bindParam(":id",$id,PDO::PARAM_INT);
    $result = $delete->execute();

    if($result) {
        echo "<p style='background-color: green; color: white'>Silme işlemi başarılı. <a href='list.php' style='color:white;'>Listeye gitmek için tıklayınız...</a></p>";
    } else {
        echo "<p style='background-color: red;'>Silme işlemi başarısız. <a href='kisi-ekle.html' style='color:white;'>Kişi ekleme işlemini tekrar denemek için tıklayınız...</a></p>";
    }

?>
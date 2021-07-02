<?php



    if($_GET) {
        $id         = $_GET["id"];
        $name       = $_GET["name"];
        $lastname   = $_GET["lastname"];
        $birthday   = $_GET["birthday"];
        $phone      = $_GET["phone"];
        $web        = $_GET["email"];
        $email      = $_GET["web"];
        $facebook   = $_GET["facebook"];
        $twitter    = $_GET["twitter"];
        $googlePlus = $_GET["googlePlus"];
        $location   = $_GET["location"];
        $note       = $_GET["note"];

        include_once("db.php");


        $data = array(
            "id"         => $id,
            "name"       => $name,
            "lastname"   => $lastname,
            "birthday"   => $birthday,
            "phone"      => $phone,
            "web"        => $web,
            "email"      => $email,
            "facebook"   => $facebook,
            "twitter"    => $twitter,
            "googlePlus" => $googlePlus,
            "location"   => $location,
            "note"       => $note
        );


        $update = $db->prepare("UPDATE adres SET
        
            name       = :name,
            lastname   = :lastname,
            birthday   = :birthday,
            phone      = :phone,
            web        = :web,
            email      = :email,
            facebook   = :facebook,
            twitter    = :twitter,
            googlePlus = :googlePlus,
            location   = :location,
            note       = :note

            WHERE id=:id
        
        ");

        $result = $update->execute($data);

        if($result) {
            echo "<p style='background-color: green; color: white'>Güncelleme işlemi başarılı. <a href='list.php' style='color:white;'>Listeye gitmek için tıklayınız...</a></p>";
        } else {
            echo "<p style='background-color: red;'>Güncelleme işlemi başarısız. <a href='kisi-ekle.html' style='color:white;'>Kişi ekleme işlemini tekrar denemek için tıklayınız...</a></p>";
        }

    }

?>
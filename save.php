<?php



    if($_GET) {
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


        $insert = $db->prepare("INSERT INTO adres SET
        
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
        
        ");

        $result = $insert->execute($data);

        if($result) {
            echo "<p style='background-color: green; color: white'>Kayıt işlemi başarılı. <a href='list.php' style='color:white;'>Listeye gitmek için tıklayınız...</a></p>";
        } else {
            echo "<p style='background-color: red;'>Kayıt işlemi başarısız. <a href='kisi-ekle.html' style='color:white;'>Kişi ekleme işlemini tekrar denemek için tıklayınız...</a></p>";
        }

    }

?>
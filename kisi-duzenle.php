<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-2 mt-4 mb-2">
                <h3>Kişi Düzenleme</h3>
            </div>
        </div>

        <div class="row">
            <?php
                include_once("db.php");
                $id = $_GET["id"];

                $select = $db->prepare("SELECT * FROM adres WHERE id=:id");
                $select->bindParam(":id",$id,PDO::PARAM_INT);
                $result = $select->execute();
                $row = $select->fetch(PDO::FETCH_ASSOC);
            ?>
            <form action="edit.php" method="get">
                <div class="row">
                    <div class="col-md-4 offset-md-2">
                        <div class="from-group">
                            <label>Ad</label>
                            <input type="text" class="form-control" name="name" placeholder="Adınızı giriniz" value="<?php echo $row["name"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Soyad</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Soyadınızı giriniz" value="<?php echo $row["lastname"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Doğum Tarihi</label>
                            <input type="date" class="form-control" name="birthday"
                                placeholder="Doğum tarihinizi giriniz" value="<?php echo $row["birthday"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Telefon</label>
                            <input type="text" class="form-control" name="phone"
                                placeholder="Telefon numaranızı giriniz" value="<?php echo $row["phone"] ?>">
                        </div>

                        <div class="from-group">
                            <label>E-Posta</label>
                            <input type="text" class="form-control" name="email"
                                placeholder="E-Posta adresinizi giriniz" value="<?php echo $row["email"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Web Adresi</label>
                            <input type="text" class="form-control" name="web" placeholder="Web adresinizi giriniz" value="<?php echo $row["web"] ?>">
                        </div>

                    </div>
                    <!--col-md-4-->

                    <div class="col-md-4">
                        <div class="from-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" name="facebook"
                                placeholder="Facebook adresinizi giriniz" value="<?php echo $row["facebook"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" name="twitter"
                                placeholder="Twitter adresinizi giriniz" value="<?php echo $row["twitter"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Google+</label>
                            <input type="text" class="form-control" name="googlePlus"
                                placeholder="Google+ adresinizi giriniz" value="<?php echo $row["googlePlus"] ?>">
                        </div>

                        <div class="from-group">
                            <label>Adres</label>
                            <textarea rows="3" class="form-control" name="location"
                                placeholder="Adres bilginizi giriniz"><?php echo $row["location"] ?></textarea>
                        </div>

                        <div class="from-group">
                            <label>Kişi Önemli Not</label>
                            <textarea rows="3" class="form-control" name="note"
                                placeholder="Kişi notunuzu giriniz"><?php echo $row["note"] ?></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <!--col-md-4-->
                    <!-- <button type="submit" class="btn btn-primary mt-2 col-md-8 offset-md-2">Kaydet</button>
                    <button type="submit" class="btn btn-primary mt-2 col-md-8 offset-md-2">Kaydet</button> -->
                    <a href="list.php" class="btn btn-secondary mt-2 col-md-4 offset-md-2 me-1">Geri</a>
                    <button type="submit" class="btn btn-primary mt-2 col-md-4">Güncelle</button>
                </div>
            </form>
        </div>
    </div>

    <script src="./bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js">
    </script>
</body>

</html>
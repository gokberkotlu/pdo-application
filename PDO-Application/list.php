<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="./bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Adres Listesi</title>
</head>

<body>

    <?php
        
        include_once("db.php");

        $rows = $db->query("SELECT * FROM adres", PDO::FETCH_ASSOC);

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 mb-2">
                <h3>Kişi listesi <a href="kisi-ekle.html"><i class="fas fa-user-plus fa-xs"></i></a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <th>Kayıt No</th>
                        <th>Ad</th>
                        <th>Soyad</th>
                        <th>Doğum Tarihi</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Web</th>
                        <th>Facebook</th>
                        <th>Twitter</th>
                        <th>Google+</th>
                        <th>Adres</th>
                        <th>İşlemler</th>
                    </thead>
                    <tbody>
                        <?php foreach($rows as $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['lastname']; ?>
                                </td>
                                <td>
                                    <?php echo $row['birthday']; ?>
                                </td>
                                <td>
                                    <?php echo $row['phone']; ?>
                                </td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['web']; ?>
                                </td>
                                <td>
                                    <?php echo $row['facebook']; ?>
                                </td>
                                <td>
                                    <?php echo $row['twitter']; ?>
                                </td>
                                <td>
                                    <?php echo $row['googlePlus']; ?>
                                </td>
                                <td>
                                    <?php echo $row['location']; ?>
                                </td>
                                <td>
                                    <a href="kisi-duzenle.php?id=<?php echo $row['id'] ?>" class="btn btn-primary mb-1" style="width: 100%">Düzenle</a>
                                    <a href="sil.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" style="width: 100%">Sil</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
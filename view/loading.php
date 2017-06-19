<?php
require_once '../model/PDO.php';
require_once '../controller/class.informations.php';
$competences = new INFORMATIONS($dbh);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <script src="js/hammer.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/vue-touch/dist/vue-touch.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
    <title>Loading</title>
</head>
<body>

<div class="row">
    <div class="col-xs-12">
        <div class="messages">
            <div class="message"></div>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="loading-logo">
            <img src="img/planet1.png" alt="" class="loading-logo-img">
        </div>
    </div>
</div>

<script>
    $('.message').typeIt({
        strings: 'Formation de la galaxie en cours',
        speed: 200,
        autoStart: true,
        cursor: false,
    });
</script>

</body>
</html>

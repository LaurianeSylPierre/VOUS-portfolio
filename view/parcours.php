<?php
require_once '../model/PDO.php';
require_once '../controller/class.informations.php';
$parcours = new INFORMATIONS($dbh);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
    <script src="js/hammer.min.js"></script>
    <script src="js/vue.js"></script>
    <script src="js/vue-touch/dist/vue-touch.js"></script>
    <title>Parcours</title>
</head>
<body>
    <?php

    $parcours->parcours();

    ?>

</body>
</html>

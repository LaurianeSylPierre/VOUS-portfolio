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
    <title>Compétences</title>
</head>
<body>

    <div id="cadre">
        <?php
            require 'comp.php';
        ?>
    </div>

<script>

    $(document).ready(function() {
        $(document).on("click", ".link", function(event){
            event.preventDefault();
            var $a = $(this);
            var adresse = $a.attr("href");
            var arr = adresse.split('?')[1];
            $.ajax({
                type : "GET",
                data: arr,
                url: 'comp.php',
                success : function(data){
                    $("#cadre").html(data);
                }
            });
        });
    });
</script>
</body>
</html>

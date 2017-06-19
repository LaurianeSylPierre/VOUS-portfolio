<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="view/css/bootstrap.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="view/css/style.css"  media="screen,projection"/>
    <script src="view/js/hammer.min.js"></script>
    <script src="view/js/vue.js"></script>
    <script src="view/js/vue-touch/dist/vue-touch.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.typeit/4.4.0/typeit.min.js"></script>
    <title>Galaxy Lau</title>
</head>
<body>

    <header></header>
    <main>
        <div id="cadre">
            <?php
                require 'view/index.php';
            ?>
        </div>
    </main>
    <footer></footer>

</body>

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
                url: 'view/index.php',
                success : function(data){
                    $("#cadre").html(data);
                }
            });
        });
    });
</script>



</html>

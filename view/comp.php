<?php
require_once '../model/PDO.php';
require_once '../controller/class.informations.php';
$competences = new INFORMATIONS($dbh);
?>

    <div class="row three">
        <div class="col-xs-4 base-infos">Analyser et répondre aux besoins, résoudre les problèmes</div>
        <div class="col-xs-4 base-infos">Créer une navigation fluide et un design efficace</div>
        <div class="col-xs-4 base-infos">Désir d'apprendre toujours plus et de s'améliorer, veille constante</div>
    </div>
    <div class="row comp-infos">
        <?php
            $competences->competences();
        ?>
        <div class="row complementary-infos">
            <?php
                $competences->acquisition();
                $competences->frameworks();
            ?>
        </div>
    </div>

<script>
var complementary = '<?php if($_GET){echo $_GET['language'];} else{echo '';}?>';
var order = parseInt($('.<?php if($_GET){echo $_GET['language'];} else{echo 'none';}?>').attr('id'), 10);

if(complementary != ''){
    $(document).ready(function(){
        $('.complementary-infos').css("display", "block");
        $('.complementary-infos').css("order", order);
        $('.three').css("display", "none");
    });
}
</script>

<div class="container">
    <div class="row">
        <h1>Galaxy Lau</h1>
    </div>
    <div class="row" id="categorysname">
        <h2>
            <a :href="url[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].link">
                {{items[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].planet}}
            </a>
        </h2>
        <ul class="nav-parent">
            <li id="p1" class="col-xs-12">
                <a class="link" href="index.php?planet=0">
                    <img src="view/img/planet1.png" alt="planète 1">
                </a>
            </li>
            <li id="p2" class="col-xs-12">
                <a class="link" href="index.php?planet=1">
                    <img src="view/img/planet2.png" alt="planète 2">
                </a>
            </li>
            <li id="p3" class="col-xs-12">
                <a class="link" href="index.php?planet=2">
                    <img src="view/img/planet3.png" alt="planète 3">
                </a>
            </li>
            <li id="p4" class="col-xs-12">
                <a class="link" href="index.php?planet=3">
                    <img src="view/img/planet4.png" alt="planète 4">
                </a>
            </li>
            <li id="p5" class="col-xs-12">
                <a class="link" href="index.php?planet=4">
                    <img src="view/img/planet5.png" alt="planète 5">
                </a>
            </li>
        </ul>
        <div class="description-box">
            <p>{{explain[<?php if($_GET){echo $_GET['planet'];} else{ echo '0';} ?>].expli}}</p>
        </div>
    </div>
</div>

<script>
var vm_infos = new Vue({
    el: '#categorysname',
    data: {
        items: [
            {planet: 'Informations Générales'},
            {planet: 'Réalisations'},
            {planet: 'Compétences'},
            {planet: 'Formation'},
            {planet: 'Contact'},
        ],
        explain: [
            {expli: 'Découvrez qui est Lauriane PIERRE, la créatrice de cette page'},
            {expli: 'Vue sur les diverses créations de sites, applications ou autre réalisés jusqu\'à présent'},
            {expli: 'Les différents langages connus et utilisés'},
            {expli: 'Les formations suivies'},
            {expli: 'Envie d\'envoyer un message ? C\'est ici que ça se passe'},
        ],
        url: [
            {link: 'view/personnal_infos.php'},
            {link: 'view/projects_global.php'},
            {link: 'view/competences.php'},
            {link: 'view/parcours.php'},
            {link: 'view/contact.php'},
        ],
    },
});
</script>

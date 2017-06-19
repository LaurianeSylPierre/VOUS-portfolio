<?php

    class INFORMATIONS{

        private $db;

        public function __construct($dbh){
            $this->db = $dbh;
        }

        public function competences(){

            $comp = $this->db->prepare("SELECT * FROM languages");
            $comp->execute();
            $allComp = $comp->fetchAll(PDO::FETCH_ASSOC);

            foreach($allComp as $row){ ?>
                <div id="<?php print_r($row['language_id']); ?>" class="row <?php print_r($row['language_name']); ?>">
                        <div class="square"></div>
                        <a class="link" href="competences.php?language=<?php print_r($row['language_name']); ?>"><?php print_r($row['language_name']); ?></a>
                        <img src="img/<?php print_r($row['images']); ?>" alt="" class="img-comp">
                </div>
            <?php }
        }

        public function acquisition(){
            $language = $_GET['language'];
            $acq = $this->db->prepare("SELECT acquisition_date FROM languages WHERE language_name = :language");
            $acq->bindparam(':language', $language);
            $acq->execute();
            $allAcq = $acq->fetchAll(PDO::FETCH_ASSOC);

            foreach($allAcq as $row){ ?>
                <div class="acquisition"><?php print_r($row['acquisition_date']); ?></div>
            <?php }
        }

        public function frameworks(){
            $language = $_GET['language'];
            $frameworks = $this->db->prepare("SELECT fl_name FROM frameworks_libraries WHERE language = :language");
            $frameworks->bindparam(':language', $language);
            $frameworks->execute();
            $allFrameworks = $frameworks->fetchAll(PDO::FETCH_ASSOC);

            foreach($allFrameworks as $row){?>
                <div class="frameworks"><?php print_r($row['fl_name']); ?> </div>
            <?php }
        }

        public function parcours(){
            $parcours = $this->db->prepare("SELECT * FROM parcours ORDER BY years ASC");
            $parcours->execute();
            $allParcours = $parcours->fetchAll(PDO::FETCH_ASSOC);

            foreach($allParcours as $row){
                if(empty($row['travail'])){ ?>
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/star.png" alt="">
                        </div>
                        <div class="col-xs-6">
                            <?php
                                print_r($row['diplome']); ?> <br> <?php
                                print_r($row['etablissement']); ?> <br> <?php
                                print_r($row['years']);
                            ?>
                        </div>
                    </div> <?php
                }
                else{ ?>
                    <div class="row">
                        <div class="col-xs-6">
                            <img src="img/star.png" alt="">
                        </div>
                        <div class="col-xs-6">
                            <?php
                                print_r($row['travail']); ?> <br> <?php
                                print_r($row['entreprise']); ?> <br> <?php
                                print_r($row['years']);
                            ?>

                        </div>
                    </div> <?php
                }
            }
        }

    }

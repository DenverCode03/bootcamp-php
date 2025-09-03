<?php

    class Voiture {

        private $id;
        private $capacite;

        // function __constructor($id, $capacite) {
        //     $this->id = $id;
        //     $this->capacite = $capacite;
        // }

        public function getId() {
            return $this->id;
        }
        public function getCapacite() {
            return $this->capacite;
        }
        public function setCapacite($capacite) {

            if (is_int($capacite)) {
                if ($capacite <= 50){
                    $this->capacite = $capacite;
                }else {
                    throw new Exception(" la capacité doit etre inferieure a 50");
                }
                
            }else {
                throw new Exception("la capacité doit etre en chiffre");
            }
            
        }
        public function setId($id) {
            $this->id = $id;
        }
    }

    $pompe1 = new Voiture();

    $pompe1->setCapacite(20);
    $cap = $pompe1->getCapacite();

    echo $cap;

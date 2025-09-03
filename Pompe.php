<?php

    class Pompe {

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
                $this->capacite = $capacite;
            }else {
                throw new Exception("la capacité doit etre en chiffre");
            }
        }
        public function setId($id) {
            $this->id = $id;
        }

        public function ravitailler($capacite) {
            $this->capacite -= $capacite;
        }
    }

    $pompe1 = new Pompe();

    $pompe1->setCapacite(800);
    $cap = $pompe1->getCapacite();

    echo $cap . "\n";
    $pompe1->ravitailler(80);
    $cap = $pompe1->getCapacite();

    echo $cap;

<?php

            Class Personnage{

                private string $_nomPersonnage;
                private array $_casting;

  
                public function __construct($nomPersonnage){

                    $this->_nomPersonnage = $nomPersonnage;
                    $this->_casting = [];
                }

                public function getNomPersonnage(){

                    return $this->_nomPersonnage;
                }
                
                public function getCasting(){

                return $this->_casting;
                }

                public function setNomPersonnage($nomPersonnage){
                
                    $this->_nomPersonnage = $nomPersonnage;
                }

                public function setCasting($casting){

                    $this->_casting = $casting;
                }
    


                public function ajouterCasting($casting){

                    $this->_casting [] = $casting;
                }
    

                public function afficherActeurs(){

                    echo "Le personnage $this->_nomPersonnage a été interpreté par : <br>";

                    foreach ($this->_casting as $acteur){

                        echo $acteur->getActeur(). " dans le film ".$acteur->getFilm()." <br>";
                    }
                }

                public function __toString(){

                    return $this->_nomPersonnage ;
                    
                }

            }
<?php

            Class Personnage{

                private string $_nomPersonnage;
                private array $_listeActeurs;

                public function __construct($nomPersonnage){

                    $this->_nomPersonnage = $nomPersonnage;
                    $this->_listeActeurs = [];
                }

                public function getNomPersonnage(){

                    return $this->_nomPersonnage;
                }

                public function getListeActeurs(){

                    return print_r($this->_listeActeurs);
                }
                
                public function setNomPersonnage($nomPersonnage){
                
                    $this->_nomPersonnage = $nomPersonnage;
                }

                public function setListeActeurs($listeActeurs){

                    $this->_listeActeurs = $listeActeurs;
                }

                public function ajouterActeur($acteur){

                    $this->_listeActeurs[] = $acteur;
                }

                public function afficherActeurs(){

                    echo "Le personnage $this->_nomPersonnage a été interpreté par : <br>";

                    foreach ($this->_listeActeurs as $acteur){

                        echo "$acteur <br>";
                    }
                }

                public function __toString(){

                    return $this->_nomPersonnage ;
                    
                }

            }
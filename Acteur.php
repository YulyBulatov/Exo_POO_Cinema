<?php


        Class Acteur extends Personne{

            private array $_filmographie;

                public function __construct($nom, $prenom, $sexe, $naissance){

                    parent::__construct($nom, $prenom, $sexe, $naissance);
                    $this->_filmographie = [];
                }
                
                public function getFilmographie(){

                    return print_r ($this->_filmographie);
                }
                
                public function setFilmographie($filmographie){

                    $this->_filmographie = $filmographie;
                }

                public function ajouterFilm($film){

                    $this->_filmographie[] = $film;
                }

                public function afficherFilmographie(){

                    echo "$this a joué dans : <br>";

                    foreach ($this->_filmographie as $film){
                        echo $film->getTitre()."<br>";
                    }
                }

                

        }
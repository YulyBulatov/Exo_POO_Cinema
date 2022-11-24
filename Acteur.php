<?php


        Class Acteur extends Personne{

                private array $_casting;

                public function __construct($nom, $prenom, $sexe, $naissance){

                    parent::__construct($nom, $prenom, $sexe, $naissance);
                    $this->_casting = [];
                }
                
                public function getFilmographie(){

                    return print_r ($this->_filmographie);
                }

                 public function getCasting(){

                return $this->_casting;
                }

                public function setFilmographie($filmographie){

                    $this->_filmographie = $filmographie;
                }

                public function setCasting($casting){

                    $this->_casting = $casting;
                }

                public function ajouterFilm($film){

                    $this->_filmographie[] = $film;
                }

                public function ajouterCasting($casting){

                $this->_casting [] = $casting;
                }

                public function afficherFilmographie(){

                    echo "L'acteur $this a interpreté les personnages : <br>";

                    foreach ($this->_casting as $personnage){

                        echo $personnage->getPersonnage()." dans le film ".$personnage->getFilm()." <br>";
                    }
                }

        }
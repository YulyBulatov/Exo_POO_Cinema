<?php


        Class Casting{

            private Film $_film;
            private array $_acteurs;
            private array $_personnages;

            public function __construct(Film $film, array $acteurs, array $personnages){

                $this->_film = $film;
                $this->_acteurs = $acteurs;
                $this->_personnages = $personnages;

                for ($i = 0, $size = count($personnages); $i < $size; $i++){

                    $personnages[$i]->ajouterActeur($acteurs[$i]);
                    $acteurs[$i]->ajouterFilm($this->_film);
                }
            }

            public function getFilm(){

                return $this->_film;
            }

            public function getActeurs(){

                return $this->_acteurs;
            }

            public function getPersonnages(){

                return $this->_personnages;
            }

            public function setFilm($film){

                $this->_film = $film;
            }

            public function setActeurs($acteurs){

                $this->_acteurs = $acteurs;
            }

            public function setPersonnages($personnages){

                $this->_personnages = $personnages;
            }

            public function afficherCasting(){

                echo "Dans  le  film $this->_film, <br> ";

                for ($i = 0, $size = count($this->_personnages); $i < $size; $i++){

                    echo $this->_personnages[$i]." a été incarné par " .$this->_acteurs[$i]." <br>";
                }
            }

        }
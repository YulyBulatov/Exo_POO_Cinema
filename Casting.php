<?php


        Class Casting{

            private Film $_film;
            private Acteur $_acteur;
            private Personnage $_personnage;

            public function __construct(Film $film, Acteur $acteur, Personnage $personnage){

                $this->_film = $film;
                $film->ajouterCasting($this);
                $this->_acteur = $acteur;
                $acteur->ajouterCasting($this);
                $this->_personnage = $personnage;
                $personnage->ajouterCasting($this);
            }

            public function getFilm(){

                return $this->_film;
            }

            public function getActeur(){

                return $this->_acteur;
            }

            public function getPersonnage(){

                return $this->_personnage;
            }

            public function setFilm($film){

                $this->_film = $film;
            }

            public function setActeur($acteur){

                $this->_acteur = $acteur;
            }

            public function setPersonnage($personnage){

                $this->_personnage = $personnage;
            }

            public function __toString()
            {
                return $this->_personnage." a été incarné par " .$this->_acteur." <br>";
                
            }

        }
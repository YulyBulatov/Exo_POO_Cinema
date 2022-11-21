<?php

        Class Genre{

            private string $_nomGenre;
            private array $_listedeFilms;

            public function __construct($nomGenre){

                $this->_nomGenre = $nomGenre;
                $this->_listedeFilms = [];

            }

            public function getNomGenre(){

                return $this->_nomGenre;
            }

            public function getListedeFilms(){

                return print_r($this->_listedeFilms);
            }

            public function setNomGenre($nomGenre){

                $this->_nomGenre = $nomGenre;
            }

            public function setListedeFilms($listedeFilms){

                $this->_listedeFilms = $listedeFilms;
            }

            public function ajouterFilm($film){

                $this->_listedeFilms[] = $film;
            }

            public function afficherFilmsdeGenre(){

                foreach ($this->_listedeFilms as $film){
                    echo $film->getTitre()."<br>";
                }
            }

        }
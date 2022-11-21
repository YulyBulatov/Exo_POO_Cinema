<?php


        Class Casting{

            private Film $_film;
            private array $_acteurs;
            private array $_personnages;

            public function __construct(Film $film, array $acteurs, array $personnages){

                $this->_film = $film;
                $this->_acteurs = $acteurs;
                $this->_personnages = $personnages;
            }
        }
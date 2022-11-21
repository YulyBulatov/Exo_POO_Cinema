<?php


        Class Film{

            private string $_titre;
            private DateTime $_datedesortie;
            private string $_duree;
            private Realisateur $_realistaeur;
            private string $_resume;
            private Genre $_genre;
            private array $_casting;

            public function __construct($titre, $datedesortie, $duree, $realisateur, $resume, $genre, ...$personnage_et_son_acteur){

                $this->_titre = $titre;
                $this->_datedesortie = $datedesortie;
                $this->_duree = $duree;
                $this->_realistaeur = $realisateur;
                $this->_resume = $resume;
                $this->_genre = $genre;
                $realisateur->ajouterFilm($this);
                $genre->ajouterFilm($this);

                foreach ($personnage_et_son_acteur as $personnage=>$acteur){

                    $this->_casting [] = $personnage_et_son_acteur;
                    
                }

                
            }

        }
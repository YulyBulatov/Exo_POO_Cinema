<?php


        Class Film {

            private string $_titre;
            private DateTime $_datedesortie;
            private int $_duree;
            private Realisateur $_realistaeur;
            private string $_resume;
            private Genre $_genre;
            private array $_casting;

            public function __construct(string $titre, string $datedesortie, int $duree, Realisateur $realisateur, string $resume, Genre $genre){


                $this->_titre = $titre;
                $this->_datedesortie = new DateTime($datedesortie);
                $this->_duree = $duree;
                $this->_realistaeur = $realisateur;
                $this->_resume = $resume;
                $this->_genre = $genre;
                $realisateur->ajouterFilm($this);
                $genre->ajouterFilm($this);
                $this->_casting = [];
               
            }

            public function getTitre(){

                return $this->_titre;
            }

            
            public function getDatedesortie(){

                return $this->_datedesortie;
            }

            
            public function getDuree(){

                return $this->_duree;
            }
            
            public function getRealistaeur(){

                return $this->_realistaeur;
            }
            
            public function getResume(){

                return $this->_resume;
            }
            
            public function getGenre(){

                return $this->_genre;
            }
            
            public function getCasting(){

                return $this->_casting;
            }
            
            public function setTitre($titre){

                $this->_titre = $titre;
            }

            
            public function setDatedesortie($datedesortie){

                $this->_datedesortie = $datedesortie;
            }

            
            public function setDuree($duree){

                $this->_duree = $duree;
            }
            
            public function setRealistaeur($realistaeur){

                $this->_realistaeur = $realistaeur;
            }
            
            public function setResume($resume){

                $this->_resume = $resume;
            }
            
            public function setGenre($genre){

                $this->_genre = $genre;
            }

            public function setCasting($casting){

                $this->_casting = $casting;
            }

            public function ajouterCasting($casting){

                $this->_casting [] = $casting;
            }

            public function afficherCasting(){

                echo "Dans le film $this->_titre : <br> ";

                foreach ($this->_casting as $casting){

                    echo $casting;
                }
            }

            public function __toString()
            {
                return $this->_titre;
            }

        }
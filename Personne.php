<?php

        abstract Class Personne{

            protected string $_nom;
            protected string $_prenom;
            protected string $_sexe;
            protected DateTime $_naissance;

            public function __construct(string $nom, string $prenom, string $sexe, string $naissance){

                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_sexe = $sexe;
                $this->_naissance = new DateTime($naissance);

                //Pour transformer string en DateTime - noter de maniere suivante: "Année - mois- jour//
            }

            public function getNom(){

                return $this->_nom;
            }

            public function getPrenom(){

                return $this->_prenom;
            }
            
            public function getSexe(){

                return $this->_sexe;
            }
            
            public function getNaissance(){

                return $this->_naissance;
            }

            public function setNom($nom){

                $this->_nom = $nom;
            }

            
            public function setPrenom($prenom){

                $this->_prenom = $prenom ;
            }
            
            public function setSexe($sexe){

                $this->_sexe = $sexe ;
            }
            
            public function setNaissance($naissance){

                $this->_naissance = $naissance ;
            }

            public function __toString(){

                return "$this->_prenom $this->_nom";
                
            }

        }
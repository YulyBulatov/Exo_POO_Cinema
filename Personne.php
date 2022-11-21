<?php

        Class Personne{

            protected string $_nom;
            protected string $_prenom;
            protected string $_sexe;
            protected DateTime $_naissance;

            public function __construct($nom, $prenom, $sexe, $naissance){

                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_sexe = $sexe;
                $this->_naissance = $naissance;
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

        }
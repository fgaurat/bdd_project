<?php

    class Project
    {
        private $id;
        private $name;
        private $developers;

        public function __construct($name='',$developers=[],$id=0)
        {
            $this->id = $id;
            $this->name = $name;
            $this->developers = $developers;
        }


        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getName(){
            return $this->name;
        }
    
        public function setName($name){
            $this->name = $name;
        }
    
        public function getDevelopers(){
            return $this->developers;
        }
    
        public function setDevelopers($developers){
            $this->developers = $developers;
        }
        
        
    }
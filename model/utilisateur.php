<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);
    require_once "../repository/Repository.php";
    class utilisateur extends Repository{
        private $nom;
        private $prenom;
        private $email;
        private $password;
        private $tel;
        private $role;
        protected $tableName = "users";
        public function __construct( $nom,$prenom,$email,$password,$tel,$role){
            parent::__construct($this->tableName);
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->email = $email;
            $this->password = $password;
            $this->tel = $tel;
            $this->role = $role;
        }

    }



?>
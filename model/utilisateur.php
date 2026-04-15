<?php

    require_once "../repository/Repository.php";


    class utilisateur extends Repository{
        private string $tableName = "user";
        public function __construct(
            private $nom,
            private $prenom,
            private $email,
            private $password,
            private $passport,
            private $tel
        ){
            parent::__construct($tableName);
        }

    }



?>
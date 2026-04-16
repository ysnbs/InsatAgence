<?php
    ini_set("display_errors",1);
    ini_set("display_startup_errors",1);
    error_reporting(E_ALL);
    require_once "../repository/Repository.php";

    class utilisateur extends Repository{
        private $username;
        private $email;
        private $password;
        private $tel;
        private $role;
        protected $tableName = "users";
        public function __construct(){parent::__construct($this->tableName);}

        public function setUsername($username){$this->username = $username;}
        public function getUsername(){return $this->username;}
        public function setEmail($email){$this->email = $email;}
        public function getEmail(){return $this->email;}
        public function setPassword($password){$this->password = $password;}
        public function getPassword(){return $this->password;}
        public function setTel($tel){$this->tel=$tel;}
        public function getTel(){return $this->tel;}
        public function setRole($role){$this->role = $role;}
        public function getRole(){return $this->role;}
        
        public function remplirUserFromDB($email,$password){
            $dataArray = $this->userData($email,$password);
            $this->setEmail($dataArray['email']);
            $this->setPassword($dataArray['password']);
            $this->setUsername($dataArray['username']);
            $this->setTel($dataArray['tel']);
            $this->setRole($dataArray['role']);
        }










    }


?>
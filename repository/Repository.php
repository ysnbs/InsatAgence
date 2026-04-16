<?php 
    require_once "../Databases/ConnexionDB.php";
    abstract class Repository{
        public static $db;
        protected function __construct(private $tableName){self::$db = ConnexionDB::getInstance();}
        
        /**
         * This function permet de inserer du data au database au table correspondant
         */
        public function addUser(...$param): void{
            $placeHolders = null. "," .implode(',' , array_fill(0,count($param),'?'));
            $req = self::$db->prepare("insert into {$this->tableName} values($placeHolders)");
            $req->execute($param);
        }

        // public function updateUser($oldMail,$oldPass,$username,$email,$password,$passport,$tel): void{
        //     $req = self::$db->prepare("update ? set username = ?, email = ? , password = ? , passport = ? , tel = ? where email = ? and password = ?  ");
        //     $req->execute([$this->tableName,$username,$email,$password,$passport,$tel,$oldMail,$oldPass]);
        // }
        // public function getAllUser() : array{
        //     $req = self::$db->prepare("select * from ?");
        //     $req->execute([$this->tableName]);
        //     return $req->fetchAll(PDO::FETCH_ASSOC);
        // }
        // /**
        //  * Summary of existeUser
        //  * @param mixed $email email du l'utilisateur
        //  * @param mixed $password mot de passe de l'utilisateur
        //  * @return bool pour tester si l'utilisateur existe dans la base de donnée
        //  */
        public function existeUser($email,$password){
            $req = self::$db->prepare("select * from {$this->tableName} where email = ? and password = ? ");
            $req->execute([$email,$password]);
            return $req->fetch(PDO::FETCH_ASSOC) != null;
        }
    }
?>
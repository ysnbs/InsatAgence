<?php 
    require_once "../Databases/ConnexionDB.php";
    abstract class Repository{
        protected static PDO $db;
        public function __construct(protected $tableName){self::$db = ConnexionDB::getInstance();}
        
        /**
         * This function permet de inserer du data au database au table correspondant
         */
        public function insertIntoDb(...$param): void{
            $placeHolders = implode(',' , array_fill(0,count($param),'?'));
            $req = self::$db->prepare("insert into ? values($placeHolders)");
            $req->execute($param);
        }
    }
?>
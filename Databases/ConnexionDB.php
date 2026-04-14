<?php 
    class ConnexionDB{
        private static string $dbname = "bdprojetweb1";
        private static string $host = "localhost";
        private static string $user ="root";
        private static string $password = "rayen2005@@@";
        protected static $db = null;

        private function __construct()
        {
            try{
                self::$db = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8",self::$user,self::$password);
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }
        }

        public static function getInstance(): PDO{
            if(!self::$db){
                new ConnexionDB();
            }
            return self::$db;
        }
    }
 

?>
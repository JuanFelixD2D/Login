<?php
    class db{
        private $host="mariadb:3306";
        private $dbname="login";
        private $user="d2d";
        private $password="d2d";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
?>

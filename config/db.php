<?php
    class db{
        private $host="mariadb";
        private $dbname="databasename";
        private $user="databaseuser";
        private $password="databasepassword";
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

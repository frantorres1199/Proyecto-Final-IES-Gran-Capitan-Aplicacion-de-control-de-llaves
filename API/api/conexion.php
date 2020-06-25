<?php

// Archivo donde se realiza la conexion a la base de datos


class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'proyecto';
        $this->user     = 'usuario';
        $this->password = "usuario";
        $this->charset  = 'utf8mb4';
    }

    function connect(){

        try{


            $connection = "mysql:host=".$this->host.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection,$this->user,$this->password);

            return $pdo;


        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}



?>

<?php

class DB{
    private $host;
	private $port;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host     = 'sql487.main-hosting.eu';
		$this->port		= '3306';
        $this->db       = 'u434370356_royal_cancun';
        $this->user     = 'u434370356_gpeza_root';
        $this->password = "9QXh2zYn8ktrdPG!R5Fs";
        $this->charset  = 'utf8mb4';
    }

    function connect(){
    
        try{

            
            $connection = "mysql:host=".$this->host.":".$this->port.";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
			
			$connectionString = 'mysql:host=127.0.0.1;dbname=dgsa';
            //$pdo = new PDO($connection, $this->user, $this->password, $options);
            $pdo = new PDO($connection,$this->user,$this->password,$options);
        
            return $pdo;


        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}
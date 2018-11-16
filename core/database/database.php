<?php

$pdo = new Database(getenv('DB_USER'),getenv('DB_PASS'),getenv('DB_NAME'),getenv('DB_HOST'));

class Database {

    protected $pdo = null;
    protected $db_host;
    protected $db_name;
    protected $db_user;
    protected $db_pass;

    public function __construct($userName, $password, $dbName, $dbHost) {
        $this->db_host = $dbHost;
        $this->db_name = $dbName;
        $this->db_user = $userName;
        $this->db_pass = $password;
        return $this->getInstance();
    }

    function getInstance() {
        if (is_null($this->pdo)) {
            $this->pdo = $this->connectToDb();
        }
        else {
            return $pdo;
        }
    }

    function connectToDb() {
        try {
            return new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    function query($string) { //manually create your own query
        $statement = $this->pdo->prepare($string);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function getProducts() {
        $statement = $this->pdo->prepare('select * from product');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function getCustomer() {
        $statement = $this->pdo->prepare('select * from customer');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}

//$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//$results = $statement->fetch(PDO::FETCH_OBJ);

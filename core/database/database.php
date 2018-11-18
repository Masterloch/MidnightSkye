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
    
    function query($string) { //Manually create your own query
        $statement = $this->pdo->prepare($string);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    function getSingleProduct($productID) {
        if (strlen($productID) > 3) { //Checks for malicious string
            throw new Exception('HOW DARE YOU!');
        }
        else {
            $statement = $this->pdo->prepare("select * from product where id = $productID");
            $statement->execute();
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }

    function getBracelets() {
        $statement = $this->pdo->prepare('select * from product where product_type_id = 1');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }

    function getNecklaces() {
        $statement = $this->pdo->prepare('select * from product where product_type_id = 2');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function getEarrings() {
        $statement = $this->pdo->prepare('select * from product where product_type_id = 3');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function getAllProducts() {
        $statement = $this->pdo->prepare('select p.*, pt.name "product_name" from product_type pt left join product p on pt.id = p.product_type_id');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function getAllCustomers() {
        $statement = $this->pdo->prepare('select * from customer');
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
}

//$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//$results = $statement->fetch(PDO::FETCH_OBJ);
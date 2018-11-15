<?php

$db_host = getenv('DB_HOST');
$db_name = getenv('DB_NAME');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASS');

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
} 
catch (PDOException $e) {
    die($e->getMessage());
}

$statement = $pdo->prepare('select * from InitialTesting');
$statement->execute();
echo '<pre>';
$results = $statement->fetchAll(PDO::FETCH_OBJ);
//$results = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
//$results = $statement->fetch(PDO::FETCH_OBJ);

foreach ($results as $result) {
    echo $result->first_name;
}
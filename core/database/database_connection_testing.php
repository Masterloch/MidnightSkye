<?php
try {
} catch (PDOException $e) {
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
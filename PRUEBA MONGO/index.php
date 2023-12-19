<?php
    //connect to mongodb
    require_once __DIR__ . '/vendor/autoload.php';
    //select a database
    $m = new MongoDB\Client("mongodb://localhost:27017");
    echo "Connection to database OK";
    $collection = (new MongoDB\Client)->test->users;
    $insertOneResult = $collection->insertOne([
        'username' => 'admin',
        'email' => 'admin@example.com',
        'name' => 'Admin User',
    ]);
?>
<?php
    function viewList(){
        $config = parse_ini_file("config.ini", true);
        $user = $config["database"]["user"];
        $passwd = $config["database"]["passwd"];
        $ddbb = $config["database"]["ddbb"];
        require_once __DIR__ . '/vendor/autoload.php';
        $m = new MongoDB\Client("mongodb://localhost:27017");
        $collection = $m->agenda->users;
    
        $cursor = $collection->find();
    
        foreach ($cursor as $obj){
            echo ("<tr><td>" . $obj['name'] . "</td><td>" . $obj['tlf'] . "</td></tr>");
        }
    }

    function insertData($name, $number){
        require_once __DIR__ . '/vendor/autoload.php';
        $m = new MongoDB\Client("mongodb://localhost:27017");

        $collection = $m->agenda->users;

        $insertOneResult = $collection->insertOne([
            'name' => $name,
            'tlf' => $number
        ]);

        $updateResult = $collection->updateOne(
            [ 'movie_name' => 'God Father' ],
            [ '$set' => [ 'genre' => 'suspense' ]]
            );
    }

    function searchData($name){
        require_once __DIR__ . '/vendor/autoload.php';
        $m = new MongoDB\Client("mongodb://localhost:27017");

        $collection = $m->agenda->users;

        $cursor = $collection->find(array('name' => $name));
        //$cursor = $collection->find(array('name' => $name, 'tlf' => $tlf));

        foreach ($cursor as $obj){
            echo ("<tr><td>" . $obj['name'] . "</td><td>" . $obj['tlf'] . "</td></tr>");
        }
    }
?>
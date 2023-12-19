<?php
    function connectDB(){
        require 'vendor/autoload.php'; // Asegúrate de que el archivo autoload.php está en la ruta correcta

        // Conéctate a tu base de datos MongoDB Atlas
        $mongoClient = new MongoDB\Client("mongodb://localhost:27017");

        return $mongoClient;    
    }

    function searchUser($name, $passwd){
        $mongoClient = connectDB();
        $database = $mongoClient->selectDatabase('mydb');
        $collection = $database->selectCollection('users');

        // Busca el usuario en la base de datos
        $user = $collection->findOne(['username' => $name, 'password' => $passwd]);

        if ($user) {
            $individual = array(
                "Mensaje" => "ok"
            );
        } else {
            $individual = array(
                "Mensaje" => "ko"
            );
        }
        return json_encode($individual);
    }

    function insertUser($name, $passwd){
        $mongoClient = connectDB();
        $database = $mongoClient->selectDatabase('mydb');
        $collection = $database->selectCollection('users');

        // Busca el usuario en la base de datos
        $existingUser = $collection->findOne(['username' => $name]);

        if ($existingUser) {
            $individual = array(
                "Mensaje" => "ko"
            );
        } else {
            // Insertar nuevo usuario
            $collection->insertOne(['username' => $name, 'password' => $passwd]);
            $individual = array(
                "Mensaje" => "ok"
            );
        }
        return json_encode($individual);
    }
?>
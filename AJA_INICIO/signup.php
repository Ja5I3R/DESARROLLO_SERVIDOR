<?php

    include "DBaccess.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo insertUser($username, $password);

?>

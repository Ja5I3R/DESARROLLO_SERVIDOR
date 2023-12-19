<?php

    include "DBaccess.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    echo searchUser($username, $password);

?>

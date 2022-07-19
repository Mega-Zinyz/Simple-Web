<?php
    $connection = new mysqli("localhost", "root", "", "db_company");
    if($connection->connect_error){
        trigger_error('Connection to Database Failed: ' . $connection->connection_error, E_USER_ERROR);
        }
?>
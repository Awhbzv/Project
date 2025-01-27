<?php
$config = require __DIR__ . "/config.php";

// database => DB connection
$connection = mysqli_connect(
    $config['db']['server'],     // DB server
    $config['db']['username'],   // DB user name
    $config['db']['password'],   // DB user password 
    $config['db']['name']        // DB name
);

// checking successful connection
if ($connection == false) {
    echo "Access denied for database!<br>";
    echo "Error: " . mysqli_connect_error();
    exit();
}

<?php
include('../libs/Smarty.class.php');
$configs = include('config.php');

// Initialise smarty system
$smarty = new Smarty();

// Establish database connection
$connection = new mysqli($configs['serverName'], $configs['user'], '');

// If connection fails
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$query = "SELECT * FROM tournament.app_sessions";
$result = $connection->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[0]['session_value']) {
        header('Location: http://localhost/scoring_system/app/pages/register.php');
    }else {
        $smarty->display('index.tpl');
    }
}



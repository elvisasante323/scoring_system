<?php
$configs = include('../config.php');

// Establish database connection
$connection = new mysqli($configs['serverName'], $configs['user'], '');

// If connection fails
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$sessionName = 'logged_in';
$sessionValue = true;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($name === $configs['nameOfScoreKeeper'] && $email === $configs['email'] && $password === $configs['password']) {
    $stmt = $connection->prepare("UPDATE tournament.app_sessions SET session_value = ? WHERE session_name = ?");
    $stmt->bind_param('ss', $sessionValue, $sessionName);
    $stmt->execute();

    echo json_encode(['success' => 'Logged in successful']);
} else {
    echo json_encode(['error' => 'Logged in failed']);
}



<?php
$configs = include('../config.php');

$teamName = $_POST['teamName'];
$memberName = $_POST['memberName'];
$score = 0;

// Establish database connection
$connection = new mysqli($configs['serverName'], $configs['user'], '');

// If connection fails
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$stmt = $connection->prepare("INSERT INTO tournament.score_board (team, name_of_participant,first_event_scores, second_event_scores, third_event_scores, fourth_event_scores, total_event_scores) VALUES (?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssiiiii", $teamName, $memberName, $score, $score, $score, $score, $score);

$result = $stmt->execute();

if ($result === true) {
    echo json_encode([
        'success' => 'Registration successful'
    ]);
}else {
    echo json_encode([
        'error' => 'Registration unsuccessful'
    ]);
}
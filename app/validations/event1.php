<?php
$configs = include('../config.php');

// Establish database connection
$connection = new mysqli($configs['serverName'], $configs['user'], '');

// If connection fails
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$scores = $_POST['scores'];

$id_one = 1;
$id_two = 2;
$id_three = 3;
$id_four = 4;
$id_five = 5;
$id_six = 6;
$id_seven = 7;
$id_eight = 8;
$id_nine = 9;
$id_ten = 10;
$id_eleven = 11;
$id_twelve = 12;
$id_thirteen = 13;
$id_fourteen = 14;
$id_fifteen = 15;
$id_sixteen = 16;
$id_seventeen = 17;
$id_eighteen = 18;
$id_nighteen = 19;
$id_twenty = 20;

try {
    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[0], $id_one);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[1], $id_two);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[2], $id_three);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[3], $id_four);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[4], $id_five);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[5], $id_six);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[6], $id_seven);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[7], $id_eight);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[8], $id_nine);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[9], $id_ten);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[10], $id_eleven);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[11], $id_twelve);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[12], $id_thirteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[13], $id_fourteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[14], $id_fifteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[15], $id_sixteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[16], $id_seventeen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[17], $id_eighteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[18], $id_nighteen);
    $stmt->execute();

    $stmt = $connection->prepare("UPDATE tournament.score_board SET first_event_scores = ? WHERE id = ?");
    $stmt->bind_param('ii', $scores[19], $id_twenty);
    $stmt->execute();

}catch (Exception $exception) {
    echo json_encode([
        'error' => 'Scores for event 1 were not saved!'
    ]);
}

$sessionName = 'event1';
$sessionValue = true;

$stmt = $connection->prepare("UPDATE tournament.app_sessions SET session_value = ? WHERE session_name = ?");
$stmt->bind_param('ss', $sessionValue, $sessionName);
$stmt->execute();

echo json_encode([
    'success' => 'Scores for event 1 has been saved'
]);



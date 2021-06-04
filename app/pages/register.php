<?php
include('../../libs/Smarty.class.php');
$configs = include('../config.php');

// Initialise smarty system
$smarty = new Smarty();

// Establish database connection
$connection = new mysqli($configs['serverName'], $configs['user'], '');

// If connection fails
if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}

$query = "SELECT * FROM tournament.score_board";
$result = $connection->query($query);

$smarty->assign('hide', true);

if ($result->num_rows >= 20) {
    $smarty->assign('hide', false);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $smarty->assign('scores', $data);
} else {
    $smarty->assign('scores', false);
}

$smarty->assign('hideEvent1', true);
$smarty->assign('hideEvent2', true);
$smarty->assign('hideEvent3', true);
$smarty->assign('hideEvent4', true);
$smarty->assign('hideEvent5', true);

/** @var  $event_one_query */
$event_one_query = "SELECT * FROM tournament.app_sessions";
$event_one_result = $connection->query($event_one_query);

if ($event_one_result->num_rows > 0) {
    while ($row = $event_one_result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[22]['session_value']) {
        $smarty->assign('hideEvent1', false);
    }
}

/** @var  $event_two_query */
$event_two_query = "SELECT * FROM tournament.app_sessions";
$event_two_result = $connection->query($event_two_query);

if ($event_two_result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[23]['session_value']) {
        $smarty->assign('hideEvent2', false);
    }
}

/** @var  $event_three_query */
$event_three_query = "SELECT * FROM tournament.app_sessions";
$event_three_result = $connection->query($event_three_query);

if ($event_three_result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[24]['session_value']) {
        $smarty->assign('hideEvent3', false);
    }
}

/** @var  $event_four_query */
$event_four_query = "SELECT * FROM tournament.app_sessions";
$event_four_result = $connection->query($event_four_query);

if ($event_four_result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[25]['session_value']) {
        $smarty->assign('hideEvent4', false);
    }
}

/** @var  $event_fifth_query */
$event_fifth_query = "SELECT * FROM tournament.app_sessions";
$event_fifth_result = $connection->query($event_fifth_query);

if ($event_fifth_result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    if ($data[26]['session_value']) {
        $smarty->assign('hideEvent5', false);
    }
}

$smarty->display('C:\xampp\htdocs\scoring_system\app\templates\registration.tpl');

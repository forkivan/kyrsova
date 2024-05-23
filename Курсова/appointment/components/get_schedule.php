<?php
require_once __DIR__ . '/../../login-and-register/src/helpers.php';


$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$schedule = getSchedule($id);

if ($schedule) {
    echo json_encode($schedule);
} else {
    echo json_encode([]);
}

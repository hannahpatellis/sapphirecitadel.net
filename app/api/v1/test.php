<?php

session_start();

$response = [
    "hello" => true,
    "user" => "Meredith Grey",
    "what are you" => "doing here?",
    "ily" => true,
    "dev" => "Hannah A. Patellis <hannahap.com>"
];

echo json_encode($response);

?>

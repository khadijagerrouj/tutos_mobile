<?php

header('Content-Type: application/json');

echo json_encode([
    "status" => "success",
    "data" => [
        [
            "id" => 1,
            "nom" => "Design",
            "couleur" => "Rose"
        ],
        [
            "id" => 2,
            "nom" => "Sport",
            "couleur" => "Bleu"
        ]
    ]
]);
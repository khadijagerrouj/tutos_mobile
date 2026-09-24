<?php

header('Content-Type: application/json');

$categories = [
    "Informatique",
    "Téléphones",
    "Accessoires"
];

echo json_encode($categories);
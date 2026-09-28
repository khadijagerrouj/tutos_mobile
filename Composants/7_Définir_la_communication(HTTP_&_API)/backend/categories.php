<?php
header('content-type: application/json');

$categories =[
    ["id"=> 1, "nom"=> "devloppement web"],
    ["id"=> 2, "nom"=>"design ui/ux"]
];
echo json_encode($categories);


?>                   
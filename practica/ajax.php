<?php

$array = [
    "uno" => 1,
    "dos" => 2,
    "tres" => 3,
    "cuatro" => 4,
    "letra"=>array("a"=>"A", "b" => "B")
];

echo json_encode($array);
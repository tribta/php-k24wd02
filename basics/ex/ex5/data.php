<?php

// id, name, year, scores[Math, Physic, Chemistry]
// array_sum(Math, Physic, Chemistry);
// count(scores) ? length ?
// array_sum/ count = avg;
$students = [[
    "id" => "SV001",
    "name" => "Donald Duck",
    "year" => "2022",
    "scores" => [
        "math" => 8.5,
        "physic" => 7.5,
        "chemistry" => 6.5,
    ]
], [
    "id" => "SV001",
    "name" => "Donald Duck",
    "year" => "2022",
    "scores" => [
        "math" => 8.5,
        "physic" => 7.5,
        "chemistry" => 6.5,
    ]
], [
    "id" => "SV001",
    "name" => "Donald Duck",
    "year" => "2022",
    "scores" => [
        "math" => 8.5,
        "physic" => 7.5,
        "chemistry" => 6.5,
    ]
]];

// $students[$student[$scores[$score]]]
// 8.5,7.5,6.5
foreach ($students as $index => $student) {
    $total = array_sum($student["scores"]);
    $count = count($student["scores"]);
    $avg = round($total / $count, 2);
    $students[$index]["avg"] = $avg;

    echo $students[$index]["avg"] . "\n";
}

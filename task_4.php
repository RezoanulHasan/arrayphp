<?php

function calculate_average_grades($studentGrades) {
    $averageGrades = [];

    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $average = $total / count($grades);
        $averageGrades[$student] = $average;
    }

    return $averageGrades;
}

$studentGrades = [
    "Student1" => [85, 92, 78],
    "Student2" => [75, 88, 92],
    "Student3" => [90, 85, 80]
];

$averageGrades = calculate_average_grades($studentGrades);

foreach ($averageGrades as $student => $average) {
    echo "$student's average grade is $average.\n";
}

?>

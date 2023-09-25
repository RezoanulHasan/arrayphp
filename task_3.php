<?php
function sortGradesDescending($grades) {
    // Sort the grades in descending order
    rsort($grades);

    // Print the sorted grades
    print_r($grades);
}

// Create an array with the given grades
$grades = [85, 92, 78, 88, 95];

// Call the function with the array as an argument
sortGradesDescending($grades);
?>


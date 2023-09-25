<?php
function removeEvenNumbers($numbers) {
    // Filter out even numbers
    $result = array_filter($numbers, function($num) {
        return $num % 2 != 0;
    });

    // Print the resulting array
    print_r($result);
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function with the array as an argument
removeEvenNumbers($numbers);
?>

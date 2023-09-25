<?php
function manipulateString($text) {
    // Convert the string to all lowercase
    $text = strtolower($text);

    // Replace "brown" with "red" in the string
    $text = str_replace('brown', 'red', $text);

    // Print the modified text
    echo $text;
}

// Create a string variable
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function with the string as an argument
manipulateString($text);
?>

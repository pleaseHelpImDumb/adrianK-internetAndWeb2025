<!-- 19.7 Write a PHP script named states.php that creates a variable $states with the value "Mis-
sissippi Alabama Texas Massachusetts Kansas". The script should perform the following tasks:
a) Search for a word in $states that ends in xas. Store this word in element 0 of an array
named $statesArray.

b) Search for a word in $states that begins with k and ends in s. Perform a case-insensitive
comparison. Store this word in element 1 of $statesArray.

c) Search for a word in $states that begins with M and ends in s. Store this element in
element 2 of the array.

d) Search for a word in $states that ends in a. Store this word in element 3 of the array.

e) Search for a word in $states at the beginning of the string that starts with M. Store this
word in element 4 of the array.

f) Output the array $statesArray to the screen. -->

<?php
$states = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = array();
$words = explode(" ", $states);

// a) Search for a word that ends in "xas"
foreach ($words as $word) {
    if (preg_match('/xas$/', $word)) {
        $statesArray[0] = $word;
        break;
    }
}

// b) Search for a word that begins with "k" and ends in "s" (case-insensitive)
foreach ($words as $word) {
    if (preg_match('/^k.*s$/i', $word)) {
        $statesArray[1] = $word;
        break;
    }
}

// c) Search for a word that begins with "M" and ends in "s"
foreach ($words as $word) {
    if (preg_match('/^M.*s$/', $word)) {
        $statesArray[2] = $word;
        break;
    }
}

// d) Search for a word that ends in "a"
foreach ($words as $word) {
    if (preg_match('/a$/', $word)) {
        $statesArray[3] = $word;
        break;
    }
}

// e) Search for a word at the beginning of the string that starts with "M"
if (preg_match('/^M\w+/', $states, $matches)) {
    $statesArray[4] = $matches[0];
}

// f) Output the array to the screen
echo "<h2>States Array Results:</h2>\n";
echo "<pre>\n";
print_r($statesArray);
echo "</pre>\n";
?>

<!DOCTYPE html>
<html>
<head>
    <title>HW4_Q6</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        pre { background: #f4f4f4; padding: 10px; border-radius: 5px; }
    </style>
</head>
<body>
</body>
</html>
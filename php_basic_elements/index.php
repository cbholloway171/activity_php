<?php
// ----- Variables (three different types) -----
$firstName = "Chandler";          // string
$lastName = "Holloway";           // string
$yearsOfPractice = 2;             // integer
$isLearningPHP = true;            // boolean
$currentDate = date("F j, Y");    // string (formatted current date)

// ----- User-defined function using two or more variables -----
function buildSummary($first, $last, $years, $learning) {
    $status = $learning ? "currently learning PHP" : "not currently learning PHP";
    return "$first $last is $status and has $years year(s) of web development practice.";
}

$summary = buildSummary($firstName, $lastName, $yearsOfPractice, $isLearningPHP);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring Basic PHP Elements</title>
</head>
<body>

    <h1>Exploring Basic PHP Elements</h1>

    <p>Chandler Holloway</p>

    <p>Current date: <?php echo $currentDate; ?></p>

    <?php
    // echo the function result inside a heading 2
    echo "<h2>" . $summary . "</h2>";

    // echo a paragraph comparing JavaScript and PHP
    echo "<p>JavaScript and PHP are both popular web languages, but they differ in where they run. "
       . "PHP executes on the server and sends finished HTML to the browser, while JavaScript "
       . "typically runs in the browser to make pages interactive without reloading. "
       . "Both can handle logic, variables, and functions, and many sites use them together.</p>";
    ?>

</body>
</html>

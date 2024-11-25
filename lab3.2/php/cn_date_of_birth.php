<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = intval($_POST["day"]);
    $month = intval($_POST["month"]);
    $year = intval($_POST["year"]);
    $errors = [];

    // Validation Rules
    if (empty($day) || empty($month) || empty($year)) {
        $errors[] = "Date of birth cannot be empty.";
    }
    if (!checkdate($month, $day, $year)) {
        $errors[] = "Date of birth must be a valid date.";
    }
    if ($year < 1953 || $year > 1998) {
        $errors[] = "Year must be between 1953 and 1998.";
    }

    if (empty($errors)) {
        echo "Date of birth is valid!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

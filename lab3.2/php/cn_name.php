<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $errors = [];

    // Validation Rules
    if (empty($name)) {
        $errors[] = "Name cannot be empty.";
    }
    if (str_word_count($name) < 2) {
        $errors[] = "Name must contain at least two words.";
    }
    if (!preg_match("/^[a-zA-Z]/", $name)) {
        $errors[] = "Name must start with a letter.";
    }
    if (!preg_match("/^[a-zA-Z\s\.\-]+$/", $name)) {
        $errors[] = "Name can only contain letters, spaces, periods, and dashes.";
    }

    if (empty($errors)) {
        echo "Name is valid!";
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : null;

    if ($gender) {
        echo "Gender selected: " . htmlspecialchars($gender);
    } else {
        echo "<p style='color:red;'>Please select a gender.</p>";
    }
}
?>

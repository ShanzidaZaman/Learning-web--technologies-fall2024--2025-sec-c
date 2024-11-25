<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $degrees = isset($_POST["degree"]) ? $_POST["degree"] : [];

    if (count($degrees) >= 2) {
        echo "Degrees selected: " . implode(", ", array_map("htmlspecialchars", $degrees));
    } else {
        echo "<p style='color:red;'>Please select at least two degrees.</p>";
    }
}
?>

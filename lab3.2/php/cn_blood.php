<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_group = isset($_POST["blood_group"]) ? $_POST["blood_group"] : "";

    if (!empty($blood_group)) {
        echo "Blood Group selected: " . htmlspecialchars($blood_group);
    } else {
        echo "<p style='color:red;'>Please select a blood group.</p>";
    }
}
?>

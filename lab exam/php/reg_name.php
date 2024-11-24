<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Name Validation
    if (isset($_POST['submit_name'])) {
        $name = $_POST['name'];
        if (empty($name)) {
            echo "Name cannot be empty.<br>";
        } elseif (!preg_match("/^[a-zA-Z]+(?: [a-zA-Z]+)+$/", $name)) {
            echo "Name must contain at least two words, start with a letter, and only contain letters, periods, or dashes.<br>";
        } else {
            echo "Name is valid.<br>";
        }
    }

    // 2. Email Validation
    if (isset($_POST['submit_email'])) {
        $email = $_POST['email'];
        if (empty($email)) {
            echo "Email cannot be empty.<br>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.<br>";
        } else {
            echo "Email is valid.<br>";
        }
    }

    // 3. Date of Birth Validation
    if (isset($_POST['submit_dob'])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        if (empty($day) || empty($month) || empty($year)) {
            echo "Date of Birth fields cannot be empty.<br>";
        } elseif (!checkdate($month, $day, $year) || $year < 1953 || $year > 1998) {
            echo "Invalid Date of Birth.<br>";
        } else {
            echo "Date of Birth is valid.<br>";
        }
    }

    // 4. Gender Selection Validation
    if (isset($_POST['submit_gender'])) {
        if (empty($_POST['gender'])) {
            echo "Gender must be selected.<br>";
        } else {
            echo "Gender is valid.<br>";
        }
    }

    // 5. Degree Selection Validation
    if (isset($_POST['submit_degree'])) {
        if (empty($_POST['degree']) || count($_POST['degree']) < 2) {
            echo "At least two degrees must be selected.<br>";
        } else {
            echo "Degree selection is valid.<br>";
        }
    }

    // 6. Blood Group Selection Validation
    if (isset($_POST['submit_blood'])) {
        $blood_group = $_POST['blood_group'];
        if (empty($blood_group)) {
            echo "Blood group must be selected.<br>";
        } else {
            echo "Blood group is valid.<br>";
        }
    }
}
?>

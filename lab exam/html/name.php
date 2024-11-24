<?php include "../php/reg_name.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .form-container {
            border: 1px solid #000;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="process.php" method="post">
            <!-- 1. Name Validation -->
            <label for="name">NAME</label>
            <input type="text" name="name" id="name" required>
            <br><br>

            <!-- 2. Email Validation -->
            <label for="email">EMAIL</label>
            <input type="email" name="email" id="email" required>
            <br><br>

            <!-- 3. Date of Birth Validation -->
            <label for="dob">DATE OF BIRTH</label>
            <input type="number" name="day" id="day" placeholder="dd" min="1" max="31" required>
            <input type="number" name="month" id="month" placeholder="mm" min="1" max="12" required>
            <input type="number" name="year" id="year" placeholder="yyyy" min="1953" max="1998" required>
            <br><br>

            <!-- 4. Gender Selection -->
            <label for="gender">GENDER</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female"> Female
            <input type="radio" name="gender" value="Other"> Other
            <br><br>

            <!-- 5. Degree Selection -->
            <label for="degree">DEGREE</label>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
            <input type="checkbox" name="degree[]" value="HSC"> HSC
            <input type="checkbox" name="degree[]" value="BSc"> BSc
            <input type="checkbox" name="degree[]" value="MSc"> MSc
            <br><br>

            <!-- 6. Blood Group Selection -->
            <label for="blood_group">BLOOD GROUP</label>
            <select name="blood_group" id="blood_group" required>
                <option value="" disabled selected>Select</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <br><br>

            <!-- Login Button -->
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>


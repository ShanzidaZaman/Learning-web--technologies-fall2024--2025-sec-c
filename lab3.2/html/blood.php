<?php include "../php/cn_bloodgroup.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Register Page</title>
</head>
<body>

<form method="post" action="">
    <label for="blood_group">BLOOD GROUP:</label>
    <select id="blood_group" name="blood_group">
        <option value="">--Select--</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select><br><br>
    <button type="submit">Submit</button>
</form>


</body>
</html>

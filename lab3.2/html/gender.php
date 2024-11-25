<?php include "../php/cn_gender.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Register Page</title>
</head>
<body>

<form method="post" action="">
    <label for="gender">GENDER:</label><br>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="Other">
    <label for="other">Other</label><br><br>
    <button type="submit">Submit</button>
</form>


</body>
</html>
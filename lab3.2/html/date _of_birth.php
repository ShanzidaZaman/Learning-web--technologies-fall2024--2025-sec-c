<?php include "../php/cn_birth.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Register Page</title>
</head>
<body>

<form method="post" action="">
    <label for="day">Day:</label>
    <input type="number" id="day" name="day" min="1" max="31">
    <label for="month">Month:</label>
    <input type="number" id="month" name="month" min="1" max="12">
    <label for="year">Year:</label>
    <input type="number" id="year" name="year" min="1953" max="1998">
    <button type="submit">Submit</button>
</form>

</body>
</html>

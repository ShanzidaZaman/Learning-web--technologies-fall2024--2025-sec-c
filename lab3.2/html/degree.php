<?php include "../php/cn_degree.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Register Page</title>
</head>
<body>

<form method="post" action="">
    <label for="degree">DEGREE:</label><br>
    <input type="checkbox" id="ssc" name="degree[]" value="SSC">
    <label for="ssc">SSC</label>
    <input type="checkbox" id="hsc" name="degree[]" value="HSC">
    <label for="hsc">HSC</label>
    <input type="checkbox" id="bsc" name="degree[]" value="BSc">
    <label for="bsc">BSc</label>
    <input type="checkbox" id="msc" name="degree[]" value="MSc">
    <label for="msc">MSc</label><br><br>
    <button type="submit">Submit</button>
</form>

</body>
</html>

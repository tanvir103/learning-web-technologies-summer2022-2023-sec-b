<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateOfBirth</title>
</head>
<body>
    <form method="post">
    <fieldset>
        <legend>Date of Birth</legend>
        DD &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MM &nbsp; &nbsp; &nbsp;YYYY <br>
        <input type="text"size="2px" name="day">/<input type="text"size="2px" name="month">/<input type="text"size="2px"name="year">
        <hr>
        <input type="submit" name="submit">
    </form>
    </fieldset>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    echo "Your date of birth is: {$_POST["day"]}/{$_POST["month"]}/{$_POST["year"]}";
}

?>
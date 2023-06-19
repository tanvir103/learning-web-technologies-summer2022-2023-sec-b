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
        <input type="text"size="2px" name="day" value="<?php
        if (isset($_POST["submit"])){echo $_POST["day"];}?>">/<input type="text"size="2px" name="month" value="<?php
        if (isset($_POST["submit"])){echo $_POST["month"];}?>">/<input type="text"size="2px"name="year"value="<?php
        if (isset($_POST["submit"])){echo $_POST["year"];}?>">
        <hr>
        <input type="submit" name="submit">
    </form>
    </fieldset>
</body>
</html>

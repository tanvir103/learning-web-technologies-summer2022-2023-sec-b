<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gender</title>
</head>
<body>
    <form method="post">
    <fieldset >
        <legend>Gender</legend>
        <input type="radio" name="Gender" value="Male"> Male
        <input type="radio" name="Gender" value="Female"> Female
        <input type="radio" name="Gender" value="Other"> Other
        <input type="submit" name="submit">
    </fieldset>
</form>
</body>
</html>
<?php
if (isset($_POST["submit"])){
    echo "your are: {$_POST["Gender"]}";
}

?>
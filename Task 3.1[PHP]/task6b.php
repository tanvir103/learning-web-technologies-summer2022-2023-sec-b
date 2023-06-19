<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form method="post">
        <fieldset>
        <legend>Blood Group</legend>
        <select name="group" id="" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
        </select>
        <hr>
        <input type="submit" name="submit" id="">
    </fieldset>
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        echo "Your Blood group is {$_POST['group']}";
    }
?>

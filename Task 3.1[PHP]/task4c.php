<?php
    $gender = '';
   if(isset($_POST['submit'])){
        $gender = $_POST['gender'];
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 4</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" id="" value="Male" <?php if($gender == 'Male') echo 'checked' ?>> Male
            <input type="radio" name="gender" id="" value="Female" <?php if($gender == 'Female') echo 'checked' ?>> Female
            <input type="radio" name="gender" id="" value="Other" <?php if($gender == 'Other') echo 'checked' ?>> Other
            <hr>
            
            <input type="submit" name="submit" value="submit" id="">        
        </fieldset>
        
    </form>
</body>
</html>
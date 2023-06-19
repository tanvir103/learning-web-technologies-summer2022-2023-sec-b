
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name</title>
</head>
<body>
    <form method="post">

        <fieldset>
            <legend>Name</legend>
            <input type="text" name="name" value="<?php
                if (isset($_POST["submit"])){
                echo "Your name is: {$_POST["name"]}";
            }
            ?>" ><hr><br>
            <input type="submit" name="submit">
            
        </fieldset>
    </form>
    <br>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
</head>
<body>
    <fieldset>
        <legend>Sign In</legend>
        <form action="profilemenu.php" method="post">
        <table>
            <tr><td>Email:</td>
            <td><input type="text" name="email" required></td></tr>
            <tr><td>Password:</td>
            <td><input type="password"name="password" required></td></tr>
            <tr><td>Don't have an account? <a href="registration.html">Create one</a></td></tr>
            <tr><td><button name="signin">SignIn</button></td></tr>
        </table>
        </form>
    </fieldset>
</body>
</html>



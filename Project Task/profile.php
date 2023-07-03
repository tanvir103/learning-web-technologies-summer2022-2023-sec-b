<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
</head>
<body>
    <fieldset>
        <legend>Profile</legend>
        <table>
            <tr><td>Name:</td>
            <td><?php$row["Fullname"]?></td>
        </tr>
        <tr><td>Username:</td><td><?php.$row["Username"]?></td></tr>
        <tr><td>Country: </td><td><?php.$row["Country"]?></td></tr>
        <tr><td>Phone:</td><td><?php.$row["Phone"]?></td></tr>
        <tr><td>Email:</td><td><?php.$row["Email"]?></td></tr>
        <tr><td>Id:</td><td><?php.$row["Id"]?></td></tr>
        <tr><td>Date of Birth: </td><td><?php.$row["DOB"]?></td></tr>
        </table>
    </fieldset>
    
</body>
</html>
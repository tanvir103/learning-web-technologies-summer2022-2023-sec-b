<?php
if(!isset($_POST['signin']));
else{
    $email=$_POST['email'];
    $conn=mysqli_connect('localhost','root','','LabTask');
    $sql="SELECT* FROM userinfo WHERE Email=$email";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    //echo $email;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Menu</title>
</head>
<body>
    <fieldset>
        <legend>Profile</legend>
        <table>
        <tr><td><a href="profile.php">View Profile Information</a></td></tr>
                <tr><td><a href="editprofileinformation.php">Edit Profile Information</a></td></tr>
                <tr><td><a href="uploadprofilepic.php">Upload Profile picture</a></td></tr>
        </table>
    </fieldset>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>
</head>
<body>
    <fieldset>
        <legend>Display</legend>
        <table celspacing="0" cellpadding="10" border='1'>
            <tr>
                <th>Name</th>
                <th>Profit</th>
            </tr>

            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'product_db');
                $res = mysqli_query($conn, "SELECT name, sellingpice - buyingprice as profit from products where display = 'true';");
                while($row = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['profit'] ?></td>
                <td>
                    <a href="<?php echo "EditProduct.php?name=".$row['name'] ?>">edit</a>
                </td>
                <td>
                    <a href="<?php echo "DeleteProduct.php?name=".$row['name'] ?>">delete</a>
                </td>
            </tr>

            <?php } ?>


        </table>
    </fieldset>
</body>
</html>
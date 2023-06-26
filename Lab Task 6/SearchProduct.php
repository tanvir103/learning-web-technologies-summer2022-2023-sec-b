<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display</title>
</head>
<body>
    <fieldset>
        <legend>Display</legend>
        <form action="" method="post">
            <input type="search" name="searchVal" placeholder="enter product name" id="" required>
            <input type="submit" name="search" value="Search By Name">
        </form>

        <br>

        <table celspacing="0" cellpadding="10" border='1'>
            <tr>
                <th>Name</th>
                <th>Profit</th>
            </tr>


            <?php
                if(isset($_POST['search'])){
                    $searchby = $_POST['searchVal'];
                }
                else $searchby = '';
                $conn = mysqli_connect('localhost', 'root', '', 'product_db');
                $res = mysqli_query($conn, "SELECT name, sellingprice - buyingprice as profit from products where display = 'true' and name like '%$searchby%';");
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
<?php
    if(!isset($_GET['name'])) header('location: DisplayProduct.php');
    else{
        $conn= mysqli_connect('localhost', 'root', '', 'product_db');
        $res = mysqli_query($conn, "SELECT * FROM products WHERE name='".$_GET['name']."';");

        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        $buyingprice = $row['buyingprice'];
        $sellingprice = $row['sellingprice'];
        $display = $row['display'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete</title>
</head>
<body>

    <fieldset>
        <legend><h2>Delete Prodcut</h2></legend>
        <form action="delete_product.php" method="post">
            <table>
                <tr>
                    <td>Name: <?php echo $name ?></td>
                </tr>
                <tr>
                    <td>Buying Price: <?php echo $buyingprice ?></td>
                </tr>
                <tr>
                    <td>Selling Price: <?php echo $sellingprice ?></td>
                </tr>
                <tr>
                    <td>Displayable: <?php if($display == 'true') echo 'Yes'; else echo 'No' ?></td>
                </tr>
                <tr> <td><hr></td>  </tr>
                <tr>
                    <td><input type="submit" name="delete" value="Delete"></td>
                    <input type="hidden" name="name" value="<?php echo $name?>">
                </tr>
            </table>
        </form>

    </fieldset>
    
</body>
</html>
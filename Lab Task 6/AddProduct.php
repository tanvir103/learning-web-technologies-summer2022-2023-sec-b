<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <fieldset>
        <legend>Add Product</legend>
        <form action="add_product.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>Buying Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="buyingPrice" required></td>
                </tr>
                <tr>
                    <td>Selling Price</td>
                </tr>
                <tr>
                    <td><input type="text" name="sellingPrice" required></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="display" value="true"> Display</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="SAVE"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
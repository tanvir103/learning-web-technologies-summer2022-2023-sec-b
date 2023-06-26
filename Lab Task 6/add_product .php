 <?php
    if(!isset($_POST['save'])) header('location: AddProduct.php');
    else{
        $name = $_POST['name'];
        $buyingprice = $_POST['buyingPrice'];
        $sellingprice = $_POST['sellingPrice'];
        
        if(isset($_POST['display'])) $display = 'true';
        else $display = 'false';



        $conn = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "INSERT INTO products VALUES('$name', '$buyingprice', '$sellingprice', '$display');";

        mysqli_query($conn, $sql);
        header('location: DisplayProduct.php');
    }
?>
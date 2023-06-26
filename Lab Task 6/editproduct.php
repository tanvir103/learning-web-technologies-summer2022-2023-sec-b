<?php
    if(!isset($_POST['update'])) header('location: DisplayProduct.php');
    else{
        $name = $_POST['name'];
        $pre_name = $_POST['pre_name'];
        $buyingprice = $_POST['buyingprice'];
        $sellingprice = $_POST['sellingprice'];
        
        if(isset($_POST['display'])) $display = 'true';
        else $display = 'false';



        $conn = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "UPDATE products SET name='$name', buyingprice='$buyingprice', sellingprice='$sellingprice', display='$display' where name='$pre_name';";
        mysqli_query($conn, $sql);
        
        header('location: DisplayProduct.php');
    }

?>
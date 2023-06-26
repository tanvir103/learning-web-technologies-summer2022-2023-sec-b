<?php
    if(!isset($_POST['save'])); 
    else{
        $name = $_POST['name'];
        $buyingprice = $_POST['buyingPrice'];
        $sellingprice = $_POST['sellingPrice'];
       

        $conn = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "INSERT INTO products VALUES('$name', '$buyingprice', '$sellingprice');";

        mysqli_query($conn, $sql);
       
    }
?>

<?php
    if(!isset($_POST['delete'])) header('location: DisplayProduct.php');
    else{
        $name = $_POST['name'];


        $conn = mysqli_connect('localhost', 'root', '', 'product_db');
        $sql = "DELETE FROM products WHERE name='$name';";
        mysqli_query($conn, $sql);
        
        header('location: DisplayProduct.php');
    }
?>
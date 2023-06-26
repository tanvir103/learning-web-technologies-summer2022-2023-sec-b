<?php
    $conn = mysqli_connect('localhost', 'root', '', 'product_db');
    if($conn) echo "connected";
    else echo "failed";
?>
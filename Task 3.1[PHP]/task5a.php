<?php
    $ssc = $hsc = $bsc = $msc = '';
    if(isset($_POST['ssc'])) $ssc = $_POST['ssc'];
    if(isset($_POST['hsc'])) $hsc = $_POST['hsc'];
    if(isset($_POST['bsc'])) $bsc = $_POST['bsc'];
    if(isset($_POST['msc'])) $msc = $_POST['msc'];

    echo "Your degree(s) are {{$ssc} {$hsc} {$bsc} {$msc}}";
?>
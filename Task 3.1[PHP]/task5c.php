<?php
    $ssc = $hsc = $bsc = $msc = '';
    if(isset($_POST['submit'])){
        
        if(isset($_POST['ssc'])) $ssc = $_POST['ssc'];
        if(isset($_POST['hsc'])) $hsc = $_POST['hsc'];
        if(isset($_POST['bsc'])) $bsc = $_POST['bsc'];
        if(isset($_POST['msc'])) $msc = $_POST['msc'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="ssc" value="SSC" <?php if($ssc=='SSC') echo 'checked' ?> size="1"> SSC
            <input type="checkbox" name="hsc" value="HSC" <?php if($hsc=='HSC') echo 'checked' ?> size="1"> HSC
            <input type="checkbox" name="bsc" value="BSc" <?php if($bsc=='BSc') echo 'checked' ?> size="1"> BSc
            <input type="checkbox" name="msc" value="MSc" <?php if($msc=='MSc') echo 'checked' ?> size="1"> MSc
            <hr>
            <input type="submit" name="submit" value="submit" id="">
        </fieldset>
        
    </form>
</body>
</html>
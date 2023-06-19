<?php
    $email=$_POST["email"];
    if(empty($email)){
        echo "Email can not be empty<br>";
    }
    $ch=explode('@',$_POST["email"]);
    if(count($ch)<2){
        echo "Use the @ sign <br>"
    }
    else if(count($ch>2)){
        echo "Email cannot contain more than one '@' sign <br>";
    }
    
?>
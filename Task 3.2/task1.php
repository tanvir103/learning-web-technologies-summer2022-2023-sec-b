<?php
	
	$name = $_POST["name"];
	
	if(empty($name)){
		
		echo "Name can not be empty <br>";
		
	}
	
	$words = explode(' ', $_POST["name"]);
	
	if(count($words)<2){
		
		echo "Name need to contain atleast two words <br>";
		
	}
	if(!ctype_alpha($name[0])){
		
		echo "First character of the name has to be an alphabet <br>";
		
	}
	if(!ctype_alnum(str_replace(array(' ', '.', '-'), '', $name))){
		
		echo "Name can only contain letters (a-z, A-Z), period and dash <br>";
		
	}

?>
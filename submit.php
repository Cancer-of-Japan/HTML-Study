<?php
	$File = "sample.txt"
	$data_file = fopen($File, "t")or die("unable to open file!");

	$name = $_post["name"];
	$age = $_POST["age"];
	$text_to_write = $name . " " . $age; 
	
	echo $text_to_write;
	echo $text_to_write;

	fwrite($data_file, $text_to_write);
	fclose($data_file);
?>

<?php
	$conn = new mysqli("localhost", "root", "", "todolist");
 
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
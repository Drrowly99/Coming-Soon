<?php

$conn = mysqli_connect('localhost', 'root', '', 'coming_soon');
//check connnection	
		if(!$conn) {
			die("connection failed: ".mysqli_connect);
		}
		
?>
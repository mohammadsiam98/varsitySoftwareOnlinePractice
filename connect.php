
<?php 
	$conn = new mysqli('localhost', 'root', '', 'varsity_software');

    if (!$conn) {
        echo "failed to create database connecting";
    } else {
        //echo "successfull to create database connection";
    }	
?>
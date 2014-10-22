<?php

//connect to mysql database using address, user, pass, databasename.
$db = new mysqli('localhost', 'root', 'root', 'app');

if($db->connect_errno){
	echo $db->connect_error;
	die('Sorry, we are having some problems.');
}

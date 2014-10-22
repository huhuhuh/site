<?php

$db = new mysqli('localhost', 'root', 'root', 'app');

echo $db->connect_errno;

if($db->connect_errno){
	echo $db->connect_error;
	die('Sorry, we are having some problems.');
}

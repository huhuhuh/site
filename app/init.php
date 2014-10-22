<?php

//Require in all the core classes 
//error_reporting(0);
require_once 'db/connect.php';
require_once 'core/App.php';
require_once 'core/Controller.php';


//Return records in query

if($result = $db->query("SELECT * FROM people")){
	if($count = $result->num_rows) {
		echo '<p>' , 'There are ' ,$count, ' records in database.' , '</p>';

		while($row = $result->fetch_object()){
			echo '<pre>' , print_r($row) ,'</pre>';
		    //echo $row->first_name , ' ' , $row->last_name, '<br>';
		}
	
		$result->free();

	}
} else{
	die($db->error);
}


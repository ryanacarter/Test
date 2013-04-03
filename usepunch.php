<?php
	
	// get the eid and the condition from the url
	$eid = $_GET[ 'eid' ];
	$condition = $_GET[ 'condition' ];
	
	// create the connection to the database
	$db = new mysqli('localhost', 'root', 'root', 'meal_plan');
	
	// if the condition is true use a double punch
	if($condition)
	{
		// create a SQL statement
		$sql = "SELECT * FROM meal_plan WHERE eid = $eid";
	
		// execute the query
		$result = $db->query( $sql );
	
		// get the data for this student
		$person = $result->fetch_assoc();
		
		//subtract the double punch
		
	}
	// use a single punch
	else
	{
		
	}


?>
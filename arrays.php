<?php
	//Array - Variable that holds multiple values
	/*
		-Indexed
		-Associative
		-Multi-dimensional
	*/

	//=================================================================
	//Indexed

	$people =  array('Gonzalo', 'Manuel', 'Tomas');
	$ids =[11,22,33];
	// You can use echo to print an element of an array
	//echo $ids[2];

	//You can add an element to an array by using blank brackets
	$ids[] = 44;

	//With this funciton, you can print all the elements of the array
	echo <h3> Printing all the values</h3>;
	print_r($ids);

	//=================================================================
	
	//Associative Arrays
	$people = array('Manuel' => 23, 'Tomas' =>22, 'Maria'=>19);
	
	//In the example above, Manuel is the key, and 23 is the value.
	echo <h3> printing the value of key Manuel</h3>;
	echo $people['Manuel']


?>

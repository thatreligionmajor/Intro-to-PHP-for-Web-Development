//this is a single line comment

/*
this is a multi-line comment 
*/

//Console.log
<?php
    echo "Hello World!";
?>

//Variables
<?php
    $first_name = "John";
    $favorite_number = 41;
    $last_name = $first_name;
    echo $first_name;
?>

//Math Operators
// + - * / % **
<?php 
	$num_1 = 41;
	$num_2 = 42;
	echo $num_1 + $num_2;
?>

//Incrementing
<?php
	echo ++$num_1; //to add after the first instance: $num_1++
	echo "<br/>";
	echo $num_1;
?>

//String Concatenation
<?php
	$first_name = "John";
	$last_name = "Doe";
	echo $first_name . " " . $last_name;
?>

//Comparision Operators
<?php
	// == Equal To 
	// != Not Equal To 
	// > Greater Than 
	// < Less Than 
	// >= Greater than or Equal To
	// <= Less Than or Equal To

	$num_1 = 41;
	$num_2 = 4;

	var_dump($num_1 == $num_2);
	//prints on webpage: bool(false)
	//with strings, PHP is case sensitive, i.e. "John" != "john"
?>

//Escape Characters
<?php
	echo "And then she said, \"Actually, you are really beautiful.\""
?>

//If Else Statements
<?php
	$first_name = "John";
	/*
	if (something is true) {
	do something;
	} else {
	do something else;
	}
	*/
	if($first_name == "John") {
	echo "Hello," . " " . $first_name . ". " . "How are you?";
	} else {
	echo "You're not" . " " . $first_name . ". Who are you?";
	}
?>

//Elseif Statements
<?php
	$num_1 = 40;
	$num_2 = 5;

	if ($num_1 > 10) {
	echo $num_1 . " is greater than 10";
	} elseif ($num_2 == 5) {
	echo $num_2 . " equals 5";
	}	else {
	echo $num_1 . " is less than 10";
	}
?>

//Numeric Arrays
<?php
	$last_names = array("Doe", "Smith", "Poppins");
	$first_names = array("John", "Steve", $last_names);
	echo $first_names[2][0];
	//will print John Doe
?>

//Associative Arrays
<?php
	$fav_pizza = array(
		"John"=>"Pepperoni",
		"Steve"=>"Cheese",
		"Mary"=>"Mushroom"
	);
	echo $fav_pizza["John"];
	//John is the key, John's value is "Pepperoni"
?>

//Array Counts
<?php
	$fav_pizza = array(
		"John"=>"Pepperoni",
		"Steve"=>"Cheese",
		"Mary"=>"Mushroom"
	);
	echo $fav_pizza["John"];
	//John is the key, John's value is "Pepperoni"
	echo count($fav_pizza);
	//will print 3

	$names = array("John", "Steve", "Mary");
	echo $names[count($names)-1];
	//will print the last item in the array
?>

//While Loops

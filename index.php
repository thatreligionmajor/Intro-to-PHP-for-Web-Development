//console.log
<?php
    echo "Hello World!";
?>

//variables
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





//associative arrays
<?php
	$fav_pizza = array(
		"John"=>"Pepperoni",
		"Steve"=>"Cheese",
		"Mary"=>"Mushroom"
	);
	echo $fav_pizza["John"];
	//John is the key, John's value is "Pepperoni"
?>

//arrray counts
<?php
	$fav_pizza = array(
		"John"=>"Pepperoni",
		"Steve"=>"Cheese",
		"Mary"=>"Mushroom"
	);
	echo $fav_pizza["John"];
	//John is the key, John's value is "Pepperoni"
?>
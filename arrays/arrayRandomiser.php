<?php

//Grab names and create an array of them
$names = file_get_contents('names.txt');

$arrayOfNames = explode("\n", $names);

$arrayOfNames = array_unique($arrayOfNames, SORT_STRING);

//Create a list of keys
$arrayKeys = array_keys($arrayOfNames);

//Get 10 random names for the list
$randomNames = array_rand($arrayOfNames, 10);

// create a duplicates of the last name
$namePadding = array_fill(sizeof($arrayOfNames), 10, $arrayOfNames[end($randomNames)]);

//Merge new names back into original list
$arrayOfNames = array_merge($arrayOfNames, $namePadding);

//shuffle list
shuffle($arrayOfNames);

// Create chunks of the list
$arrayChunks = array_chunk($arrayOfNames, 6);

var_dump($arrayChunks);
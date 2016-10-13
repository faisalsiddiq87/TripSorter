<?php
//Define the root directory path
define("ROOT", __DIR__ ."/");
//Define the path to sample json file
$sampleFile = ROOT.'data/sampleData.json';
//Autoload all the libraries for parsing json, sorting the trip details and printing trip details
include ROOT.'/vendor/autoload.php'; 
//Load the JSON data object for parsing
$parse = new app\Core\Parser($sampleFile); 
//Parse the JSON data and convert to array
$arr = $parse->parseJson(); 
//Load the array for sorting
$sort = new app\Core\SortCards($arr); 
//Sort the array from source to destination
$arr = $sort->sortAllCards(); 
//Load the sorted array for printing the trip details
$trip =  new app\Core\TripDetails($arr); 
//Print the trip detail
$trip->printTripDetails();
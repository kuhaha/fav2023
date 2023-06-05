<?php 
require "vendor/autoload.php";
use \Symfony\Component\Yaml\Yaml;

header('Content-Type: text/plain; charset=UTF-8');

echo "=======dat/calendar.yaml============\n";
$input = file_get_contents("dat/calendar.yaml");
$result = Yaml::parse($input);

var_dump($result);
// echo $result['year'];
// print_r($result['priority']);
// print_r($result['definitions']);

echo "=======dat/reservation.yaml============\n";
$input = file_get_contents("dat/reservation.yaml");
$result = Yaml::parse($input);
var_dump($result);


echo "=======dat/facilities.yaml============\n";
$input = file_get_contents("dat/facilities.yaml");
$result = Yaml::parse($input);
var_dump($result);

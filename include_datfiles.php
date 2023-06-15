<?php
header('Content-Type: text/plain; charset=UTF-8');

define('DAT', 'dat/php');
$dat_calendar = include(DAT . '/dat_calendar.php');
$dat_facility = include(DAT . '/dat_facilities.php');
$dat_reservation = include(DAT .'/dat_reservation.php');   

echo "=======dat/php/dat_calendar.php============\n";
print_r($dat_calendar);

echo "=======dat/php/dat_facilities.php============\n";
print_r($dat_facility);

echo "=======dat/php/dat_reservation.php============\n";
print_r($dat_reservation);

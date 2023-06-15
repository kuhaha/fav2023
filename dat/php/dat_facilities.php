<?php
$ksu_timeslots = 	[
    1 => [
	    'start_time' => '9:00',
	    'end_time' => '10:40',
    ],

    2 => [
        'start_time' => '11:00',
        'end_time' => '12:40',
    ],

    3 => [
        'start_time' => '13:40',
        'end_time' => '15:20',
    ],
    4 => [
        'start_time' => '15:40',
        'end_time' => '17:20',
    ],

    5 => [
        'start_time' => '17:40',
        'end_time' => '19:20',
    ],
]; // end of timeslots

return  [
    '12107'=>[
        'name' => '12107番教室',
        'building' => '12号館',
        'floor' => 1,
        'timeslots' => $ksu_timeslots,
	],

	'12216'=>[ 
        'name' => '12216番教室',
        'building' => '12号館',
        'floor' => 2,
        'timeslots' =>  $ksu_timeslots,  
    ],

    '12311'=>[
        'name' => '12号館大会議室',
        'building' => '12号館',
        'floor' => 3,
        'time' => ['9:00','21:00'],          
        'timeunit' => [
            'length' => 10,
            'unit' => 'minute',
        ]
	],

]; // end of facilities


<?php

$party = [
'bilbo'=> 'Bilbo Baggins',
'frodo'=> 'Frodo Baggins',
'ring'=> 'The One Ring'
];

$party['gandalf']= 'Gandalf the Grey';
unset ($party['bilbo']);
$party['sam']='Samwise Gamgee';
unset($party['gandalf']);

$party = leave_hobbiton($party);
$party = go_to_bree($party);
$party = go_to_weathertop($party);
go_to_weathertop($party);
$party = meet_arwen($party);
go_to_rivendell($party);
go_to_moria($party);

// 31.
go_to_falls_of_rauros($party);

// 40.
$parties = break_fellowship($party);

var_dump($parties);

present_party($parties[0]);

present_party($parties[1]);

present_party($parties[2]);
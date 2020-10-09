<?php

function leave_hobbiton($party)
{

    $party=array_merge($party, [

    'merry' => 'Meriadoc Brandybuck',

    'pippin' => 'Peregrin Took'

]);

return $party;
};


function go_to_bree($party)
{

    $party=array_merge($party,['strider'=>'Strider']);

    return $party;
};

function go_to_weathertop($party)
{
    $party=array_merge($party,[

    'Witch King of Angmar',

    'Nazgûl #2',

    'Nazgûl #3',

    'Nazgûl #4',

    'Nazgûl #5',

    'Nazgûl #6',

    'Nazgûl #7',

    'Nazgûl #8',

    'Nazgûl #9'

]);
return $party;
};

function meet_arwen($party)
{
    
    $party = array_merge($party,['arwen'=>'Arwen Undómiel']);
    array_splice($party,-19,9);
    return $party;
};

function go_to_rivendell($party)
{
    unset ($party['arwem']);

    $party = array_merge($party,[

    'gandalf' => 'Gandalf the Grey',

    'boromir' => 'Boromir',

    'legolas' => 'Legolas',

    'gimli' => 'Gimli'

]);
$party['strider']='Aragorn';
}
function go_to_moria(&$party)
{
    // 26.
    unset($party['gandalf']);
}

// 28.
function go_to_falls_of_rauros(&$party)
{
    // 29.
    $party = array_merge($party, array_fill(0, 1000, 'Orc'));

    // 30.
    unset($party['boromir']);
}

// 32.
function break_fellowship($party)
{
    // this should do the same as the next 4 statements
    // $mordor_party = array_intersect_key($party, array_fill_keys([
    //     'frodo', 'sam', 'ring'
    // ], null));

    // 33.
    $mordor_party = [];

    // this should do the same as the next 3 statements
    // foreach (['frodo', 'sam', 'ring'] as $key) {
    //     $mordor_party[$key] = $party[$key];
    // }

    // 34.
    $mordor_party['frodo'] = $party['frodo'];
    $mordor_party['sam']   = $party['sam'];
    $mordor_party['ring']  = $party['ring'];

    // 35.
    $hunting_party = [];

    // 36.
    $hunting_party['strider'] = $party['strider'];
    $hunting_party['legolas'] = $party['legolas'];
    $hunting_party['gimli']   = $party['gimli'];

    // 37.
    $hungry_party = [];

    // 38.
    $hungry_party = array_diff_key($party, $mordor_party, $hunting_party);

    // 39.
    return [
        $mordor_party,
        $hunting_party,
        $hungry_party
    ];
}
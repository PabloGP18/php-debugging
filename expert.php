<?php
declare(strict_types=1);

echo "Exercise 1 starts here:";

//variable x was not declared
//put variable x in function new_exercise() so it works on the rest of the functions
function new_exercise($x="1") {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}
new_exercise(2);
// variable $monday has to be [0] for "monday" in array
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// for a string you have to have "" or ''
$str = '` "Debugged !" `  Also very fun" `';

// for a substr choose where you start(offset) and your length
echo substr($str, 0, 16);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as $day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);



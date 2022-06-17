<?php
declare(strict_types=1);

echo "Exercise 1 starts here:";
//variable x was not declared
function new_exercise() {
    $x="1";
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





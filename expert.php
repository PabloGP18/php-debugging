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
// variable monday is array [0] for "monday" in array
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed

$str = ``“Debugged ! Also very fun”;
echo substr($str, 0, 10);





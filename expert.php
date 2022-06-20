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

//added & to $day
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}
print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
// added foreach with range instead of for loop
foreach(range('a','z')as $letter){
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param === "") {
            $param = randomHeroName();
        }
    }
    // changed implode: first separetor and then array
    return implode(" - ", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"]; // added ;
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes)-1)][rand(0, 10)]; // -1 because of arrays have 11 elements

    return $randname;
}

echo "Here is the name: " .combineNames();

new_exercise(7);
//no int but string for date format
function copyright(string $year) {
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));

new_exercise(8);
function login(string $email, string $password) {
    //changed the || for && because they both have to be the same for the login
    if($email === 'john@example.be' && $password === 'pocahontas') {
        return 'Welcome John Smith';
        // only possible to return 1 time in function
    }else
    return ' No access';
}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
}
//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
for($i=0, $j= count($areTheseFruits); $i < $j; $i++) {
    if(!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this


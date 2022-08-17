<?php

require __DIR__.'/lib/Ship.php';

function printSummary($someShip){
    echo 'The name of the Ship is: '. $someShip->name;
    echo '<hr/>';
    echo 'Ship description: '.$someShip->setNameAndSpecs(false);
    echo '<hr/>';
    echo 'Ship description: '.$someShip->setNameAndSpecs(true);
}

$myShip = new Ship();
$myShip->name = 'Jedi';
$myShip->weaponPower = 100;
$myShip->jediPower = 80;
$myShip->setStrength(55);
printSummary($myShip);

/** @var  Ship $otherShip */
$otherShip->name = 'Imperial';
$otherShip->weaponPower = 90;
$otherShip->jediPower = 100;
//$otherShip->strength = 90;
printSummary($myShip);
echo '<hr/>';
if ($myShip->doesGivenShipHaveMoreStrength($otherShip)){
    echo $otherShip->name.' has more stength';
}else {
    echo $myShip->name.' has more stength';
}




?>

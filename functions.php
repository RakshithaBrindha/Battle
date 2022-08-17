<?php

require_once __DIR__.'/lib/Ship.php';

function get_ships()
{
    $ships = array();
    
    $ship1 = new Ship();
    $ship1->setName('Jedi Starfight');
    $ship1->setWeaponPower (5);
    $ship1->setJediPower(15);
    $ship1->setStrength(30);
    $ships['starfighter'] = $ship1;

    $ship2 = new Ship();
    $ship2->setName('CloakShape Fighter');
    $ship2->setWeaponPower (2);
    $ship2->setJediPower(2);
    $ship2->setStrength(70);
    $ships['cloakshape_fighter'] = $ship2;

    $ship3 = new Ship();
    $ship3->setName('Super Star Destroyer');
    $ship3->setWeaponPower (70);
    $ship3->setJediPower(0);
    $ship3->setStrength(500);
    $ships['super_star'] = $ship3;

    $ship4 = new Ship();
    $ship4->setName('RZ-1 A-wing interceptor');
    $ship4->setWeaponPower (4);
    $ship4->setJediPower(4);
    $ship4->setStrength(50);
    $ships['A_wing'] = $ship4;
    
    return $ships;
}

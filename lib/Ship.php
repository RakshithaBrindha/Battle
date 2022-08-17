<?php

class Ship{
    private $name;
    
    private $weaponPower = 0;

    private $jediPower = 0;
    
    private $strength = 0;
    
    public function setNameAndSpecs($useShortFormat = false)
    {
        if($useShortFormat) {
            return sprintf(
            '%s (w:%s,j:%s,s:%s)',
            $this->name,
            $this->weaponPower,
            $this->jediPower,
            $this->strength
            );  
            }   
         else {
            return sprintf(
            '%s: w:%s/j:%s/s:%s',
            $this->name,
            $this->weaponPower,
            $this->jediPower,
            $this->strength
        );
        }
    }
    
    public function doesGivenShipHaveMoreStrength($givenShip){
        return $givenShip->strength > $this->strength; 
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediPower()
    {
        return $this->jediPower;
    }

    /**
     * @param int $jediPower
     */
    public function setJediPower($jediPower)
    {
        $this->jediPower = $jediPower;
    }
    public function setStrength($strength){
        if(!is_numeric($strength)){
            throw new Exception('The strength can be only in numerics.');
        }
        $this->strength = $strength;
    }

    public function getStrength(){
        return $this->strength; 
    }
}


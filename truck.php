<?php

class Truck extends vehicle
{
    private int $capacity;

    private int $currentLoad = 0;

    private int $energyLevel = 100;

    private string $energy = 'fuel';

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
    }
    
    public function getLoad()
{
    $sentence = "";
    while ($this->currentLoad <= $this->capacity ) 
    {
        $this->currentLoad += 1;
        $sentence = "filling !";
    }
    $sentence .= "is Full !";
    
    $this->currentLoad = $this->capacity - 1;
    echo $sentence;
    return $this->capacity;

}    
    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
          $this->energy = $energy;  
        }
        return $this;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */ 
    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }

    /**
     * Get the value of currentLoad
     */ 
    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    /**
     * Set the value of currentLoad
     *
     * @return  self
     */ 
    public function setCurrentLoad($currentLoad): Truck
    {
        $this->currentLoad = $currentLoad;

        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity): Truck
    {
        $this->capacity = $capacity;

        return $this;
    }
}

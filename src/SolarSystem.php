<?php 

namespace LostEngineer;
/**
 * SolarSystem class
 * @package lostengineers
 */
class SolarSystem implements SolarSystemContract{

    private $letterValues = [
        'A' => 1,
        'E' => 2,
        'I' => 3,
        'O' => 5,
        'U' => 8 
    ];

    private $names = [];
     
    /**
     * construct method
     *
     * @param array $namesSystem
     */
    public function __construct( array $namesSystem = [])
    {
        $this->names = $namesSystem;
    }
    
    /**
     * getNameSystem method
     * return all names solar systems
     *
     * @return array
     */
    public function getNamesSystem(): array
    {
          return $this->names;
    }

    public function geValueLetter($letter): int
    {   $letter = strtoupper($letter);
        return isset($this->letterValues[$letter]) ? $this->letterValues[$letter] : 0;
    }




}
<?php

namespace LostEngineer;

class Navigator
{
    private $pointsMatch = 0;

    public function addQtyPeople(int $points ): Navigator
    {  
        $this->pointsMatch = $points;
        return $this;
    }
    public function calculateNextDestine(SolarSystemContract $systemSolar)
    {
        $nextSystemStop = null;
        foreach($systemSolar->getNamesSystem() as $system){
            $totalPoints = 1;
            foreach(str_split($system) as $v){
                 $points = $systemSolar->geValueLetter($v);
                 $totalPoints = $points > 0 ? $totalPoints * $points : $totalPoints;
            }

            if( $this->pointsMatch > 0 && ceil($totalPoints % $this->pointsMatch) == 0){
                printf('Senhores engenheiros, essa espaçonave vai ficar aqui nesse sistema %s:  %s', $system, PHP_EOL);
                break;
            }
            printf('Oi senhores engenheiros acabamos de passar pelo sistema  %s:  %s', $system, PHP_EOL);
            sleep(1);
        };  
        
        return $nextSystemStop;
    }
}

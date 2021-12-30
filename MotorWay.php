<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{


        public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }


        public function addVehicle(Vehicle $vehicle)
    {
        if (!($vehicle instanceof Skateboard || $vehicle instanceof Bike)){
        $this->currentVehicles[] = $vehicle;
        }

    }
}

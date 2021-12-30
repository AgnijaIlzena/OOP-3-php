<?php

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct (int $nbLane, int $maxSpeed) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }


    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
    }


    public function getNbLane()
    {
        return $this->nbLane;
    }


    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }


    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }


    abstract public function addVehicle(Vehicle $vehicle);
}

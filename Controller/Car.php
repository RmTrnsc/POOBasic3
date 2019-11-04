<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
  /**
   * @var string
   */
  private $energy;
  /**
   * @var int
   */
  private $energyLevel;

  public function __construct(string $color, int $nbSeats, int $currentSpeed, string $energy)
  {
    parent::__construct($color, $nbSeats, $currentSpeed);
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
  }

  /**
   * @return string
   */
  public function getEnergy(): string
  {
    return $this->energy;
  }

  /**
   * @param string $energy
   * @return Car
   */
  public function setEnergy(string $energy): Car
  {
    $this->energy = $energy;
    return $this;
  }

  /**
   * @return int
   */
  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  /**
   * @param int $energyLevel
   * @return Car
   */
  public function setEnergyLevel(int $energyLevel): Car
  {
    $this->energyLevel = $energyLevel;
    return $this;
  }

}
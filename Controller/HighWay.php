<?php

require_once 'Vehicle.php';

abstract class HighWay
{
  /**
   * @var array
   */
  protected $currentVehicles;
  /**
   * @var int
   */
  protected $nbLine;
  /**
   * @var int
   */
  protected $maxSpeed;

  abstract public function addVehicles(Vehicle $Vehicles);

  /**
   * @return array
   */
  public function getCurrentVehicles(): ?array
  {
    return $this->currentVehicles;
  }

  /**
   * @param array $currentVehicles
   * @return HighWay
   */
  public function setCurrentVehicles(array $currentVehicles): HighWay
  {
    $this->currentVehicles = $currentVehicles;
    return $this;
  }


  /**
   * @return int
   */
  public function getNbLine(): int
  {
    return $this->nbLine;
  }

  /**
   * @param int $nbLine
   * @return HighWay
   */
  public function setNbLine(int $nbLine): HighWay
  {
    $this->nbLine = $nbLine;
    return $this;
  }

  /**
   * @return int
   */
  public function getMaxSpeed(): int
  {
    return $this->maxSpeed;
  }

  /**
   * @param int $maxSpeed
   * @return HighWay
   */
  public function setMaxSpeed(int $maxSpeed): HighWay
  {
    $this->maxSpeed = $maxSpeed;
    return $this;
  }


}
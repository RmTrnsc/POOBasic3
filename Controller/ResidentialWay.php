<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
  /**
   * @var int
   */
  public $nbLine = 2;
  /**
   * @var int
   */
  public $maxSpeed = 50;

  public function addVehicles($Vehicle)
  {
    $vehicles = $this->getCurrentVehicles() ?? [];
    if (!in_array($Vehicle, $vehicles))
      array_push($vehicles, $Vehicle);
    $this->setCurrentVehicles($vehicles);
  }
}
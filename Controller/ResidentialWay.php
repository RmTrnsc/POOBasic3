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

  public function addVehicles($bikeSkate)
  {
    $vehicles = $this->getCurrentVehicles() ?? [];
    if (!in_array($bikeSkate, $vehicles))
      array_push($vehicles, $bikeSkate);
    $this->setCurrentVehicles($vehicles);
  }
}
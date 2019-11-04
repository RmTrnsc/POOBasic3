<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
  /**
   * @var int
   */
  public $nbLine = 1;
  /**
   * @var int
   */
  public $maxSpeed = 10;

  public function addVehicles(Vehicle $vehicle)
  {
    $vehicles = $this->getCurrentVehicles() ?? [];
    if (!in_array($vehicle, $vehicles) && ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)) {
      array_push($vehicles, $vehicle);
      $this->setCurrentVehicles($vehicles);
    }
  }

}
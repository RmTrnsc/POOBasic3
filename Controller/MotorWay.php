<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
  /**
   * @var int
   */
  public $nbLine = 4;
  /**
   * @var int
   */
  public $maxSpeed = 130;

  public function addVehicles(Vehicle $car)
  {
    $cars = $this -> getCurrentVehicles() ?? [];
    if (!in_array($car, $cars) && ($car instanceof Car || $car instanceof Truck)) {
      array_push($cars, $car);
      $this -> setCurrentVehicles($cars);
    }
  }

}
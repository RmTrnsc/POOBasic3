<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
  /**
   * @var int
   */
  private $storageCapacity = 100;
  /**
   * @var int
   */
  private $weight;
  /**
   * @var int
   */
  private $initStorage = 0;
  /**
   * @var string
   */
  private $energy;

  public function __construct(
    string $color,
    int $nbSeats,
    int $currentSpeed,
    string $energy,
    int $weight)
  {
    parent::__construct($color, $nbSeats, $currentSpeed);
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
    $this->weight = $weight;
  }

  public function full()
  {
    if ($this->storageCapacity === $this->weight) {
      return 'The truck is full';
    } elseif ($this->storageCapacity > $this->weight) {
      return 'In filling';
    }
  }

  /**
   * @return int
   */
  public function getStorageCapacity(): int
  {
    return $this->storageCapacity;
  }

  /**
   * @param int $storageCapacity
   * @return Truck
   */
  public function setStorageCapacity(int $storageCapacity): Truck
  {
    $this->storageCapacity = $storageCapacity;
    return $this;
  }

  /**
   * @return int
   */
  public function getWeight(): int
  {
    return $this->weight;
  }

  /**
   * @param int $weight
   * @return Truck
   */
  public function setWeight(int $weight): Truck
  {
    $this->weight = $weight;
    return $this;
  }

  /**
   * @return int
   */
  public function getInitStorage(): int
  {
    return $this->initStorage;
  }

  /**
   * @param int $initStorage
   * @return Truck
   */
  public function setInitStorage(int $initStorage): Truck
  {
    $this->initStorage = $initStorage;
    return $this;
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
   * @return Truck
   */
  public function setEnergy(string $energy): Truck
  {
    $this->energy = $energy;
    return $this;
  }


}
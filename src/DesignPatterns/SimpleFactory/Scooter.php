<?php

namespace src\DesignPatterns\SimpleFactory;

/**
 * 摩托车类
 */
class Scooter implements VehicleInterface
{
    private $color;

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getColor()
    {
      return $this->color;
    }

    /**
     * @param mixed $destination
     */
    public function driveTo($destination)
    {

    }
}
<?php

namespace src\DesignPatterns\Builder;

/**
* 
*/
class Director
{

    /**
     * “导演”并不知道具体实现细节
     *
     * @param BuilderInterface $builder
     *
     * @return Parts\Vehicle
     */
    public function build(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
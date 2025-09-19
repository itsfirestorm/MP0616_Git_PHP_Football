<?php

namespace WorldCup;

/**
 * Class to define the Ball
 */
class Ball
{
    private $material;

    /**
     * Get the Material
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the Material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    public function move()
    {
        echo "moving<br>";
    }
}

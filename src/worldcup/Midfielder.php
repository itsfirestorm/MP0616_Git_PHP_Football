<?php

namespace WorldCup;

/**
 * Class to define the midfielder
 */
class Midfielder extends Player {
    private $vision;

    public function __construct() {
        $this->setPosition("Midfielder");
    }

    /**
     * Get the vision
     */
    public function isVision() {
        return $this->vision;
    }

    /**
     * Set the vision
     */
    public function setVision($vision) {
        $this->vision = $vision;
    }

    public function organize() {
        echo "organizing\n"; // En PHP no existe print1n, así que uso echo para que funcione.
    }
}

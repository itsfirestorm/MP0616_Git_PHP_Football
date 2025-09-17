<?php

namespace WorldCup;

/**
 * Class to define the midfielder
 */

require_once __DIR__ . "/Player.php";
class Midfielder extends Player {
    private $vision;

    public function __construct($team) {
        parent::__construct($this->setPosition("Midfielder"), $team);
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
        echo "Organizing.<br>"; // En PHP no existe print1n, así que uso echo para que funcione.
    }
}
